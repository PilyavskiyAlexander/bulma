<?php

namespace App\Http\Middleware;

use Closure;

class CheckLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        if(!empty($request->subdomain) && empty(session('lang'))){
            app()->setLocale($request->subdomain);
        }

        if(!empty(session('lang'))){
            app()->setLocale(session('lang'));
        }


        return $next($request);
    }
}
