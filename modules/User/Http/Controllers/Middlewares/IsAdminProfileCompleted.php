<?php

namespace Modules\User\Http\Controllers\Middlewares;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class IsAdminProfileCompleted
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
        return redirect()->route('users.profile')->with(['error_msg' => 'لطفا ابتدا پروفایل کاربری خود را تکمیل و سپس برای عملیات نوبت دهی اقدام کنید!']);
    }
}
