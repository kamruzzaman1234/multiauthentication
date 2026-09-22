<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        //  if($request->user() && $request->user()->role !== $role ){
        //     return redirect()->route('dashboard')->with('error', 'You are not authorized to access this page.');
        //  }
        if($request->user() && $request->user()->role !== $role = $request->user()->role) {
            return redirect()->route('dashboard')->with('error', 'You are not authorized to access this page.');

        }
        return $next($request);
    }
}
