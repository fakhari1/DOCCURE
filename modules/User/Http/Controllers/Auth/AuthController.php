<?php

namespace User\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use User\Http\Requests\LoginRequest;

class AuthController extends Controller
{

    public function showLogin()
    {
        return view('User::auth.login');
    }

    public function login(LoginRequest $request)
    {

    }

}
