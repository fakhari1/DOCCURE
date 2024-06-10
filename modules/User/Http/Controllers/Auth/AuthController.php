<?php

namespace User\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use User\Http\Requests\OtpGetRequest;
use User\Http\Requests\OtpSendRequest;
use User\Models\Otp;
use User\Models\User;

class AuthController extends Controller
{
    public function showForm()
    {
        return view('User::auth.login');
    }

    public function storeOtp(OtpSendRequest $request)
    {
        $mobile = ltrim($request->mobile, '0');
        $user = User::firstOrCreate(['mobile' => $mobile]);

        // $apiKey = config('sms.api_key');
        $verificationCode = rand(100000, 999999);
        $token = bin2hex(random_bytes(40));

        if ($existsOtp = Otp::HasPendingCode($mobile)) {
            $seconds = Carbon::parse(now())->diffInSeconds(Carbon::parse($existsOtp->expired_at));
            return redirect()->route('auth.otp.get',
                ['token' => $existsOtp->token, 'seconds' => $seconds]
            )->with(['warning_msg' => 'شما یک کد منقضی نشده دارید؛ از همان کد استفاده کنید']);
        }

        if ($otps = Otp::HasExpiredCode($mobile)) {
            foreach ($otps as $item) {
                $item->update(['status' => Otp::STATUS_EXPIRED]);
            }
        }
//
        $otp = Otp::create([
            'user_id' => $user->id,
            'mobile' => $mobile,
            'verification_code' => $verificationCode,
            'expired_at' => Carbon::now()->addSeconds(120)->format('Y-m-d H:i:s'),
            'token' => $token
        ]);

        $client = new SoapClient(config('sms.wsdl_url'));
        $input_data = array("verification_code" => $verificationCode);

        $res = $client->sendPatternSms(
            config('sms.originator'),
            $mobile,
            config('sms.username'),
            config('sms.password'),
            config('sms.pattern_code'),
            $input_data
        );

        if (is_numeric($res)) {
            return redirect()->route('auth.otp.get', ['token' => $token]);
        }

        $otp->update([
            'status' => Otp::STATUS_EXPIRED
        ]);

        return redirect()->back()->with('error_msg', 'اشکال در ارسال پیامک با پشتیبانی تماس بگیرید!');
    }

    public function getOtp(\Illuminate\Http\Request $request)
    {
        $token = $request->token;
        $otp = Otp::where('token', $token)->latest()->first();

        if (!$otp) return redirect()->route('auth-show-form')->with(['error_msg' => 'توکن نامعتبر است؛ دوباره تلاش کنید!']);

        $seconds = Carbon::parse(now())->diffInSeconds(Carbon::parse($otp->expired_at));
        return view('User::auth.otp-code', ['token' => $token, 'seconds' => $seconds]);
    }

    public function login(OtpGetRequest $request)
    {
        $otp = Otp::where('token', $request->token)->where('verification_code', $request->verification_code)->first();

        if (!$otp) {
            return redirect()->route('auth.show-form')->with(['error_msg' => 'توکن نامعتبر است؛ دوباره تلاش کنید!']);
        }

        if ($otp->isExpired() or $otp->isAccepted()) {
            $otp->update(['status' => Otp::STATUS_EXPIRED]);
            return redirect()->route('auth.show-form')->with(['error_msg' => 'کد مورد نظر منقضی شده است؛ دوباره تلاش کنید!']);
        }

        $otp->update(['status' => Otp::STATUS_ACCEPTED]);

        $user = $otp->user;

        $user->update(['mobile_verified_at' => Carbon::now()->format('Y-m-d H:i:s')]);

        Auth::login($user);

        return redirect()->route('home')->with(['success_msg' => 'به حساب کاربری خود خوش آمدید!']);
    }

    public function retryOtp(\Illuminate\Http\Request $request)
    {

        $token = $request->token;
        $otp = Otp::where('token', $token)->latest()->first();

        if (!$otp) return redirect()->route('auth.show-form')->with(['error' => 'توکن نامعتبر؛ دوباره وارد شوید!']);

        $otp->update(['status' => Otp::STATUS_EXPIRED]);

        $user = $otp->user;

        $verificationCode = rand(100000, 999999);
        $token = bin2hex(random_bytes(40));

        $newOtp = Otp::create([
            'user_id' => $user->id,
            'mobile' => $user->mobile,
            'verification_code' => $verificationCode,
            'expired_at' => Carbon::now()->addSeconds(120)->format('Y-m-d H:i:s'),
            'token' => $token
        ]);

        $client = new SoapClient(config('sms.wsdl_url'));

        $input_data = array("verification_code" => $verificationCode);

        $res = $client->sendPatternSms(
            config('sms.originator'),
            $user->mobile,
            config('sms.username'),
            config('sms.password'),
            config('sms.pattern_code'),
            $input_data
        );


        if (is_numeric($res)) {

            $seconds = Carbon::parse(now())->diffInSeconds(Carbon::parse($newOtp->expired_at));

            return redirect()->route('auth.otp.get', ['token' => $token, 'seconds' => $seconds]);

        }
    }

    public function checkExpiredOtp(Request $request)
    {
        $otp = Otp::where('token', $request->token)->first();

        if ($otp->isExpired()) {
            return response()->json([
                'data' => [
                    'status' => true
                ]
            ]);
        }

        $seconds = Carbon::parse(now())->diffInSeconds(Carbon::parse($otp->expired_at));
        return response()->json([
            'data' => [
                'status' => false,
                'seconds' => $seconds
            ]
        ]);
    }

    public function logout()
    {
        Auth::logout();

        Session::flush();

        return redirect()->to('/');
    }

}
