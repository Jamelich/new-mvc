<?php

namespace App\Controllers;

use App\Models\ProductsModel;

class HomePageController
{
    public function homepage()
    {
        $products = (new ProductsModel)->getAll();

        return view(
            __DIR__ . '/../../views/homepage.php',
            [
                'products' => $products
            ]
        );
    }
}
