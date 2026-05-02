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
                return redirect()->route('password.request')->with('info', 'Please verify your email and set a new password to continue.');
            }
        }

        return $next($request);
    }
}
