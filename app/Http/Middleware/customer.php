<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class customer
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
        if (Auth::user()) {
            if (Auth::user()->customer) {
                return $next($request);
            }
            return redirect('/');
        }
        return redirect('login');

        return $next($request);
    }
}
