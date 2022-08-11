<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/views/assets/css/style.css">
    <title>Document</title>
</head>

<body>

    <?php

    // var_dump($menus);
    // echo '<pre>';
    // print_r($menus);
    // echo '</pre>';

    // print_r(array_filter($menus, function($v, $k) {
    //     // return $k == 'id_parent' && $v == 0;
    //     return $k == '0';
    // }, ARRAY_FILTER_USE_BOTH));

    // echo '</pre>';


    // function cmp_function($a, $b)
    // {
    //     return ($a['level'] > $b['level']);
    // }
    // uasort($menus, 'cmp_function');

    $childrens = [];
    foreach ($menus as $item) {
        if ($item['id_parent'] > 0) {
            $childrens[$item['id_menu_item']] = $item['id_parent'];;
        }
    }

    echo '<div class="nav"><ul class="nav_items">';

    foreach ($menus as $item) {
        if ($item['id_parent'] == 0) {
            echo printItem($item, $items, $childrens);
        }
        // if (!$item["parent_id"]) echo printItem($item, $items, $childrens); // Выводим все элементы верхнего уровня
    }

    echo '</ul></div>';

    function printItem($item)
    {
        echo '<li class="main_menu_item"><a href="' . $item['url'] . '">' . $item['name'] . '</a></li>';
    }


    // echo '<pre>';
    // print_r($childrens);
    // echo '</pre>';

    // if ($item['id_parent'] == 0) {
    //     echo $item['name'] . ' - ';
    //     echo $item['url'];
    // }

    // foreach ($menus as $item1) {
    //     echo $item1['id_menu_item'];
    //     echo $item1['name'] . ' - ';
    //     echo $item1['url'];
    // } 
    ?>

    <hr>