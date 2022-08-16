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

    // сортировка массива по level 
    function cmp_function($a, $b)
    {
        return ($a['level'] > $b['level']);
    }
    uasort($menus, 'cmp_function');


    foreach ($menus as $item) {
        if ($item['id_parent'] == 0) {
            echo '<li class="main_menu_item"><a href="' . $item['url'] . '">' . $item['name'] . '</a>';
            search_child($item, $menus);
            echo '</li>';
        }
    }

    // функция поиска дочерних элементов
    function search_child($parent_item, $array_child)
    {
        $arr_child = $array_child; // копия массива для поиска дочерних элементов
        $count_ch = 0;
        foreach ($arr_child as $child) {
            if ($parent_item['id_menu_item'] == $child['id_parent']) {
                $count_ch++;
            }
        }

        if ($count_ch > 0) {
            echo '<ul class="sub_menu">';

            foreach ($arr_child as $child) {
                if ($parent_item['id_menu_item'] == $child['id_parent']) {
                    echo '<li class="sum_menu_item"><a href="' . $child['url'] . '">' . $child['name'] . '</a>';
                    search_child($child, $array_child);
                }
            }

            echo '</ul>';
        }
    }
    ?>

    <hr>