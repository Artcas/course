<?php

namespace App\Http\Middleware\Customer;

use Closure;

class Verified
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
        if(auth('customers')->user()->is_verified)
            return $next($request);
        else
            return  redirect()->route('confirmOtp');
    }
}
