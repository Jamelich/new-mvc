<?php

namespace App;

use App\Controllers\Error404Controller;

class Router
{
    public function handle()
    {
        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

        $routes = include __DIR__ . '/../routes.php';

        if (!array_key_exists($uri, $routes)) {
            return (new Error404Controller)->handle();
        }

        $controller = $routes[$uri][0];
        $method = $routes[$uri][1];

        return (new $controller)->$method();
    }
}
