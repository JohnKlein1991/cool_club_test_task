<?php

namespace App\Http\Middleware;

use Closure;

/**
 * Для API контроллеров, чтобы возвращался ответ только в виде JSON
 *
 * Class ForceJsonResponse
 * @package App\Http\Middleware
 */
class ForceJsonResponse
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
        $request->headers->set('Accept', 'application/json');
        return $next($request);
    }
}
