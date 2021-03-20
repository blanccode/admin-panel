<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Support\Facades\Gate;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        $url = request()->path();

        if (! $request->expectsJson() && $url == 'dashboard') {
            return route('admin.login');
        } 
        if (!$request->expectsJson()) {
            return route('login');
        }
    }
}
