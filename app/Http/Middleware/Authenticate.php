<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string
     */
    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {
            return route('management.auth.login');
        }
    }
    // {
    //     if (! $request->expectsJson()) {
    //         dd();
    //         return route('management.auth.login');

    //     //     $guard = \Auth::guard();


    //     //     dd($guard->name);

    //     // switch ($guard) {
    //     //             case 'management':
    //     //                 $home = 'management.dashboard';
    //     //                 break;

    //     //             case 'portal':
    //     //             default:
    //     //                 $home = 'portal.dashboard';
    //     //         }

    //     // return redirect()->route($home);

    //     }
    // }
}
