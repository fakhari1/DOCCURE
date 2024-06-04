<?php

namespace User\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RolePermission\Models\Role;
use SoapClient;
use User\Http\Requests\OtpGetRequest;
use User\Http\Requests\OtpSendRequest;
use User\Models\Otp;
use User\Models\User;

class OtpController extends Controller
{
    public function store(OtpSendRequest $request)
    {
        $mobile = ltrim($request->mobile, '0');
        $user = User::query()->firstOrCreate(['mobile' => $mobile])->assignRole(Role::ROLE_PATIENT);

        // $apiKey = config('sms.api_key');
        $verificationCode = rand(100000, 999999);
        $token = bin2hex(random_bytes(40));

        if ($existsOtp = Otp::HasPendingCode($mobile)) {
            return redirect()->route('otps.get', ['token' => $existsOtp->token])->with(['warning_msg' => 'شما یک کد منقضی نشده دارید؛ از همان کد استفاده کنید']);
        }

        $otp = Otp::create([
            'user_id' => $user->id,
            'mobile' => $mobile,
            'verification_code' => $verificationCode,
            'expired_at' => Carbon::now()->addMinutes(2)->format('Y-m-d H:i:s'),
            'token' => $token
        ]);

//        $client = new SoapClient(config('sms.wsdl_url'));
        $input_data = array("verification_code" => $verificationCode);

//        $res = $client->sendPatternSms(
//            config('sms.originator'),
//            $mobile,
//            config('sms.username'),
//            config('sms.password'),
//            config('sms.pattern_code'),
//            $input_data
//        );

//        if (is_numeric($res)) {
        $seconds = Carbon::parse(now())->diffInSeconds(Carbon::parse($otp->expired_at));
        return redirect()->route('otps.get', ['token' => $token]);
//        }

//        $otp->update([
//            'status' => Otp::STATUS_EXPIRED
//        ]);
//        return redirect()->back()->with('error_msg', 'اشکال در ارسال پیامک با پشتیبانی تماس بگیرید!');
    }

    public function showCheck(Request $request)
    {
        $token = $request->token;
        $otp = Otp::where('token', $token)->latest()->first();

        if (!$otp) return redirect()->route('auth-show-form')->with(['error_msg' => 'توکن نامعتبر است؛ دوباره تلاش کنید!']);

        return view('User::auth.otp-code', ['token' => $token]);
    }

    public function retry(Request $request)
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
            'expired_at' => Carbon::now()->addMinutes(2)->addSeconds(4)->format('Y-m-d H:i:s'),
            'token' => $token
        ]);

//        $client = new SoapClient(config('sms.wsdl_url'));
//
//        $input_data = array("verification_code" => $verificationCode);
//
//        $res = $client->sendPatternSms(
//            config('sms.originator'),
//            $user->mobile,
//            config('sms.username'),
//            config('sms.password'),
//            config('sms.pattern_code'),
//            $input_data
//        );


//        if (is_numeric($res)) {
//        $seconds = Carbon::parse($newOtp->expired_at)->greaterThan(Carbon::now()) ? Carbon::parse($newOtp->expired_at)->diffInSeconds(Carbon::now()) : 0;

        $seconds = Carbon::parse($otp->expired_at)->diffInSeconds(Carbon::now());
        dd($seconds);
        return redirect()->route('otps.get', ['token' => $token]);

//        }
    }

    public function checkExpired(Request $request)
    {
        $otp = Otp::where('token', $request->token)->first();

        dd($otp->isExpired());
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

    public function check(OtpGetRequest $request)
    {
        $otp = Otp::where('token', $request->otp_token)->where('verification_code', $request->verification_code)->first();

        if (!$otp) {
            return redirect()->route('show-form')->with(['error_msg' => 'توکن نامعتبر است؛ دوباره تلاش کنید!']);
        }

        if ($otp->isExpired() or $otp->isAccepted()) {
            $otp->update(['status' => Otp::STATUS_EXPIRED]);
            return redirect()->route('show-form')->with(['error_msg' => 'کد مورد نظر منقضی شده است؛ دوباره تلاش کنید!']);
        }

        $otp->update(['status' => Otp::STATUS_ACCEPTED]);

        $user = User::whereId($otp->user_id)->first();

        $user->update(['mobile_verified_at' => Carbon::now()->format('Y-m-d H:i:s')]);

        Auth::login($user);

        return redirect()->route('home')->with(['success_msg' => 'به حساب کاربری خود خوش آمدید!']);
    }
}
