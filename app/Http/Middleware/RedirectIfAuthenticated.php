<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure                 $next
     * @param string|null              $guard
     *
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {
            switch ($guard) {
                case 'management':
                    $home = 'management.dashboard.index';
                    break;

                case 'secure':
                    $home = 'secure.dashboard.index';
                    break;

                case 'portal':
                default:
                    $home = 'portal.dashboard.index';
            }

            return redirect()->route($home);
        }

        return $next($request);
    }
}
