<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class IsUserProfileCompleted
{
    /**
     * Handle an incoming request.
     *
     * @param \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response) $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::user()->hasCompletedProfile())
            return $next($request);
        return redirect()->route('users.profile')->with(['error_msg' => 'لطفا ابتدا پروفایل کاربری خود را تکمیل و سپس برای رزرو نوبت اقدام کنید!']);
    }
}
