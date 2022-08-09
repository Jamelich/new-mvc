<?php

return [
    //    '/news' => [NewsController::class, 'list'] // тождественно
    '/news' => ['\App\Controllers\NewsController', 'list'],
    '/' => ['\App\Controllers\HomePageController', 'homepage']
];
