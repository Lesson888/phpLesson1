<?php
require_once './products.php'; //подключили файл с скриптом
?>


<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Album example for Bootstrap</title>

    <!— Bootstrap core CSS —>
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <link href="./css/album.css" rel="stylesheet">

</head>

<body>

<div class="album text-muted">
    <div class="container">

        <div class="row">

<!--            --><?php //foreach ($products as $product) : ?>
<!--                <div class="card">-->
<!--                    <h6>--><?php //echo $product[0] ?><!--</h6>-->
<!--                    <span>Цена: --><?php //echo $product[1] ?><!--</span>-->
<!--                    <p class="card-text">--><?php //echo $product[2] ?><!--</p>-->
<!--                    <img src="--><?//= getImage($product) ?><!--"/>-->
<!--                    <a href="--><?//= getLink($product) ?><!--"> <button type="submit">купить</a></button>-->
<!--                </div>-->
<!--            --><?php //endforeach; ?>
            <?php foreach ($products_new as $product) : ?>
            <div class="card">
                <h6>Название: <?= $product['name'] ?></h6>
                <span>Цена: <?= $product['price'] ?></span>
                <p>Описание: <?= $product['description'] ?></p>
                <img src="<?= $product['image'] ?>" alt="Фото">
                <button><a href="<?= $product['link'] ?>">Купить</a></button>
                <p>
                    Доступные цвета
                    <?php foreach ($product['colors'] as $key => $color) : ?>
                    <span><?= $key ?>: <?= $color ?>, </span>
                    <?php endforeach; ?>
                </p>
                <p>
                    Доступные цвета: <br />
                    <?= implode(', ', $product['colors']) ?>

                </p>
        </div>
            <?php endforeach; ?>
    </div>
</body>
</html>