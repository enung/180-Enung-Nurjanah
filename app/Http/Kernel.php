<?php
protected $routeMiddleware = [
    // Baris kode lain...

    'auth' => \App\Http\Middleware\Authenticate::class,
    'guest' => \App\Http\Middleware\RedirectIfAuthenticated::class,
    'not.authenticated' => \App\Http\Middleware\RedirectIfNotAuthenticated::class,
];
