<?php

namespace Modules\User\Http\Middlewares;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AuthenticatedUserIsUser
{
    public function handle(Request $request, Closure $next)
    {
        if (auth()->check() && auth()->user()->isUser())
            return $next($request);

        return redirect('/');
    }
}
