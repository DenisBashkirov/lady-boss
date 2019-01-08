<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Gate;

class CheckRights
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string  $right
     * @return mixed
     */
    public function handle($request, Closure $next, $right)
    {
        if(Gate::denies($right))
            return redirect()->back();

        return $next($request);
    }
}
