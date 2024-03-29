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
            if (Auth::guard($guard)->check()) {
                switch ($guard) {
                   case 'admin':
                       $route = 'admin/deshboard';
                       break;
                  default:
                       $route = 'admin/deshboard';
               }
               return redirect($route);
           }
        }
    }
}
