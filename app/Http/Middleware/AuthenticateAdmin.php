<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class AuthenticateAdmin extends Middleware
{
    /**
     * Redirect user if not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
{
    if (! $request->expectsJson()) {
        return route('admin.login.form'); // route login admin yang sudah kamu buat
    }
}

}
