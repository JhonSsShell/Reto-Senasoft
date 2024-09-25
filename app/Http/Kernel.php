<?php

namespace App\Http;

use App\Http\Middleware\checkPermissions;
use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    protected $middleware = [
        // Middleware global
    ];

    protected $routeMiddleware = [
        // Middleware de rutas
        'permission' => checkPermissions::class
        // Otros middleware
    ];
}
