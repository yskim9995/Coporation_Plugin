<?php

namespace Yunseo\XePlugin\CorporationPlugin\Middlewares;

use Closure;

final class LoginMiddleware
{
    public  function handle($request, Closure $next)
    {

        $exceptRoutes = ['login', 'auth.*', 'bubble::auth.*','cp::Success','cp::Fail'];
        if(!auth()->check() && !$request->routeIs($exceptRoutes))
        {
            return redirect()->route('login');
        }

        return $next($request);
    }

}


