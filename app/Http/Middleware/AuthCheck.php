<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check() && Auth::user()->status == 'true') {
            if (Auth::user()->role_id == 1) {
                return abort(403);
            }
            if (Auth::user()->role_id == 2) {
                return abort(403);
            }
            if (Auth::user()->role_id == 3) {
                return redirect('/welcome');
            }
        }
        return $next($request);
    }
}
