<?php

namespace App\Http\Middleware;

use Closure;

use Session;

class warrior
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
        if (Session::get('warrior') == "warrior") {
            return $next($request);  // if exist proceed to next step
        } else {
            return redirect('/');
        }
    }
}
