<?php

namespace App\Http\Middleware;

use view;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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

        // jika belum login
        if (!Auth::check()) {
            return redirect()->route('showLogin')
                ->withErrors(['login error', 'Please login first']);
        }

        if (Auth::user()->role !== 'admin') {
            Auth::logout();
            return redirect()->route('showLogin')
                ->withErrors(['smg', 'Unautorized']);
        }

        return $next($request);
    }
}
