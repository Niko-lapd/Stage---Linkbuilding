<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class partner
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
            if (Auth::user()->partner) {
                return $next($request);
            }
            return redirect('/');
        }
        return redirect('login');

        return $next($request);
    }
}
