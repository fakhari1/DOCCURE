<?php

namespace Modules\User\Http\Middlewares;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AuthenticatedUserIsAdmin
{

    public function handle(Request $request, Closure $next)
    {
        if (auth()->check() && auth()->user()->isAdmin())
            return $next($request);

        return redirect('/');
    }
}
