<?php

namespace App\Http\Middleware;

use Closure;

class superadmin
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
        if (Session::get('student') == "student") {
            return $next($request);  // if exist proceed to next step
        } else {
            return redirect('/');
        }
    }
}
