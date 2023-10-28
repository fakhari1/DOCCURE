<?php

namespace User\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;
use User\Http\Requests\LoginRequest;
use User\Models\User;

class AuthController extends Controller
{

    public function showLogin()
    {
        return view('User::auth.login');
    }

    public function login(LoginRequest $request)
    {

    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->back();
    }

}
