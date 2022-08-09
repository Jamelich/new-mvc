<?php

namespace App\Controllers;

use App\Models\NewsModel;

class Error404Controller
{
    public function handle()
    {
        $news = (new NewsModel)->getAll();

        return view(
            __DIR__ . '/../../views/404.php',
            [
                'news' => $news
            ]
        );
    }
}
