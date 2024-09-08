<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Session\TokenMismatchException;

class HandleCsrfTokenExpiration
{
    public function handle($request, Closure $next)
    {
        try {
            return $next($request);
        } catch (TokenMismatchException $e) {
            // Redirect to login page with a session expiration message
            return redirect()->route('login')->with('message', 'Your session has expired. Please log in again.');
        }
    }
}
