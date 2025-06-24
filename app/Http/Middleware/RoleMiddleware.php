<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RoleMiddleware
{
    public function handle($request, \Closure $next, ...$roles)
        {
            if (!auth()->check()) {
                return redirect()->route('login'); // Jika belum login, arahkan ke halaman login
            }

            if (!in_array(auth()->user()->role, $roles)) {
                abort(403, 'Anda tidak memiliki akses ke halaman ini.');
            }

            return $next($request);
        }

}

