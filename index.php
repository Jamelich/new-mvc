<?php

use App\Router;

include_once __DIR__ . '/vendor/autoload.php';

echo (new Router)->handle();
