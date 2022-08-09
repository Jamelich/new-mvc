<?php include __DIR__ . '/header.php'; ?>

Красивая страница 404
<br>

Посмотрите другие новости:
<br>
<?php foreach ($news as $item) : ?>

    <?php echo $item->id; ?> - <?php echo $item->title; ?>

    <br>

<?php endforeach; ?>

<?php include __DIR__ . '/footer.php'; ?>