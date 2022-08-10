<?php

namespace App\Controllers;

use App\Models\HeaderModel;

class HeaderController
{
    public function handle()
    {
        $array_menu = (new HeaderModel)->getAll();

        return view(
            __DIR__ . '/../../views/header.php',
            [
                'menu' => $array_menu
            ]
        );
    }
}
