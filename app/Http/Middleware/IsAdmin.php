<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(auth()->user()->role != 'admin'){
            if ($request->wantsJson() || $request->expectsJson()) {
                return response()->json([
                    'status' => false,
                    'message' => 'This is protected route for admin.'
                ], 403);
            }
            return redirect()->route('login');
        }
        return $next($request);
    }
}
