<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Log;

class QueryModeMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $mode = $request->query('mode');
        
        if ($mode) {
            Log::info('QueryModeMiddleware: mode=' . $mode);
            $request->attributes->set('mode', $mode);
        }
        
        return $next($request);
    }
}
