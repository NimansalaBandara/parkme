<?php

protected $middlewareGroups = [
    'api' => [
        \Laravel\Sanctum\Http\Middleware\EnsureFrontendRequestsAreStateful::class,
        'throttle:api',
        \Illuminate\Routing\Middleware\SubstituteBindings::class,
    ]
];

protected $routeMiddleware = [
    'role' => \App\Http\Middleware\CheckRole::class,
];


