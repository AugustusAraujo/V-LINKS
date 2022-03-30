<?php

namespace App\Http\Middleware;

use Closure;

class ContentTypeMiddleware
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
        $resp = $next($request);
        $resp->header("Content-Type","application/json");
        return $resp;
    }
}
