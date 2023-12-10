<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Check if the user is authenticated
        if (!$request->user()) {
            abort(403, 'Unauthorized');
        }

        // Check if the user has the expected role
        if ($request->user()->role !== $role) {
            abort(403, 'Unauthorized');
        }
        
        return $next($request);
    }
}
