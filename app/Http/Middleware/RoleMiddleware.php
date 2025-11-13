<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next, ...$roles)
    {
        // Jika belum login, arahkan ke login
        if (!Auth::check()) {
            return redirect('/login');
        }

        $user = Auth::user();

        // Jika user adalah guest → hanya boleh akses "/"
        if ($user->role === 'guest' && $request->path() !== '/') {
            return redirect('/');
        }

        // Jika role tidak termasuk yang diizinkan untuk route ini
        if (!in_array($user->role, $roles) && $user->role !== 'guest') {
            return redirect('/');
        }

        return $next($request);
    }
}
