<!doctype html>
<html lang="en">
<html>
<head>
    <meta charset="UTF-8">
        <meta name="viewport"
                         content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>


<?php if ($message) : ?>
        <?= $message ?>
    <?php else: ?>
        <form action="index.php" method="post">
                <p>Представьтесь</p>
                <input type="text" name="name">
                <p>Укажите Ваш номер</p>
                <input type="text" name="phone">
                <p>Напишите комментарий</p>
                <input type="text" name="comment">
                <button type="submit">Отправить</button>
            </form>
    <?php endif; ?>

</body>
</html>

