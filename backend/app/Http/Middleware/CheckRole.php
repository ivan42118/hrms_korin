<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next, ...$roles): Response
    {
        // Pastikan user login
        if (!auth()->check()) {
            return redirect('login');
        }

        // Ambil role user
        $userRole = auth()->user()->role->name;

        // Cek apakah role user ada di daftar role yang diperbolehkan
        if (!in_array($userRole, $roles)) {
            abort(403, 'Unauthorized access');
        }

        return $next($request);
    }
}
