<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class RoleChecker
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $adminRole, $userRole)
    {
        $roles = Auth::check() ? Auth::user()->role : '';

        if(strcmp($adminRole, $roles)) {
            return $next($request);
        } else if (strcmp($userRole, $roles) ) {
            return $next($request);
        }

        return Redirect::route('login');
    }
}
