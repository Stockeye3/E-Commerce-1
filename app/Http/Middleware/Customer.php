<?php

namespace App\Http\Middleware;

use Closure;

class Customer
{

    public function handle($request, Closure $next)
    {
        return $next($request);
    }
}
