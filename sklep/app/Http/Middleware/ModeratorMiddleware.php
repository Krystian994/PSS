<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ModeratorMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check() && (Auth::user()->rola === 'moderator' || Auth::user()->rola === 'admin')) {
            return $next($request);
        }

        return redirect('/')->with('error', 'Nie masz dostępu do tej strony.');
    }
}
