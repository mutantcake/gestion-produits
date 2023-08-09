<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckAdminLevel
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
         // Vérifie si l'utilisateur est authentifié et a un niveau "Admin" en base de données
         if ($request->user() && $request->user()->level === 'Admin') {
            return $next($request);
        }

        // Rediriger l'utilisateur vers une autre page ou renvoyer une réponse d'erreur
        return redirect()->back()->with('error', 'Désolé ! Seul l\'administrateur peut effectuer cette operation.');
    
    }
}
