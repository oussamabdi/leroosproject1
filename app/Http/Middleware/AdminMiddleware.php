<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    public function handle($request, Closure $next)
    {
        // Vérifie si l'utilisateur est authentifié en tant qu'administrateur
        if (Auth::guard('administrateur')->check()) {
            return $next($request);
        }

        // Redirige vers la page de connexion pour les administrateurs si non authentifié
        return redirect('/admin/connexion');
    }
}
