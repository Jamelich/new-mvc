<?php

// Глобальные функции
// Подгружается с помощью авторзагрузки composer-а
// Благодаря этому файл не надо подгружать через require/include

function view(string $path, array $variables = []): string
{
    extract($variables, EXTR_SKIP);
    ob_start();
    include $path;
    return ob_get_clean();
}
