<?php

namespace User\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Session;
use User\Http\Requests\OtpSendRequest;
use User\Models\User;

class AuthController extends Controller
{

    public function form()
    {
        return view('User::auth.login');
    }
    public function logout()
    {
        Auth::logout();

        Session::flush();

        return redirect()->to('/');
    }

}
