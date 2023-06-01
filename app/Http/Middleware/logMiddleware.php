<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\Response;

class logMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    { 
        Log::build([
            'driver' => 'single',
            'path' => storage_path('logs/method-url/method-url.log'),
        ])->info("{$request->method()}: {$request->url()}"); 

        return $next($request);
    }
}
