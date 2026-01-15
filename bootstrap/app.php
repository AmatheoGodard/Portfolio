<?php

use Illuminate\Foundation\Application;
use App\Http\Middleware\JuryMiddleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function ($middleware) {
        // Déclaration de l'alias 'jury'
        $middleware->alias([
            'jury' => JuryMiddleware::class,
        ]);
    })
    ->withExceptions(function ($exceptions) {
        // Ici tu peux configurer la gestion des exceptions si nécessaire
    })
    ->create();
