<?php include __DIR__ . '/header.php'; ?>
<br>

главная
<br>

Посмотрите товары:
<br>

<?php

foreach ($products as $item) {
    echo $item['id_product'];
    echo $item['name'] . ' - ';
    echo $item['price'];
    echo '<hr>';
} ?>

<br>


<?php include __DIR__ . '/footer.php'; ?>