<?php

// Глобальные функции
// Подгружается с помощью авторзагрузки composer-а
// Благодаря этому файл не надо подгружать через require/include

use App\Models\HeaderModel;

function view(string $path, array $variables = []): string
{
    extract($variables, EXTR_SKIP);
    $menus =  (new HeaderModel)->getAll();
    ob_start();
    include $path;
    return ob_get_clean();
}
