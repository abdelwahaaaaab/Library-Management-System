<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Adminmiddleware
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
        if(session('ALoggedIn'))
        {
            return $next($request);
        }
        else
        {
            return redirect('/home')->with('alert', '* You Must Login As An Admin To Access This Page * ');
        }
        
    }
}
