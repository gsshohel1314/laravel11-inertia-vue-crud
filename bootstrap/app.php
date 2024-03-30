<?php

use Illuminate\Foundation\Application;
use App\Http\Middleware\HandleInertiaRequests;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->group('web', [
            // Register Web middleware
            HandleInertiaRequests::class,
        ]);

        $middleware->group('api', [
            // Register API middleware
        ]);

        $middleware->alias([
            // register custom middleware
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();