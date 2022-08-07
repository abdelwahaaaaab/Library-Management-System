<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Clientmiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(session('CLoggedIn'))
        {
            return $next($request);
        }
        else
        {
            return redirect('/admin-home')->with('alert', '* You Must Login As a Client to Access This Page*');
        }
        
    }
}
