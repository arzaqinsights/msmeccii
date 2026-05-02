<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ForcePasswordSetup
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (auth()->check() && auth()->user()->requires_password_setup) {
            // Avoid infinite loop
            if (!$request->is('password/*') && !$request->is('logout')) {
                return redirect()->route('password.setup')->with('info', 'Please set a permanent password for your account to continue.');
            }
        }

        return $next($request);
    }
}
