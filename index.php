<?php

$message = false;


if (isset($_REQUEST['name']) and isset ($_REQUEST['phone'])) {

    $name = $_REQUEST ['name'];
    $phone = $_REQUEST ['phone'];

    $row = 'Здравствуйте, ' . $name .
        '. Ваш номер. ' . $phone . PHP_EOL;

    file_put_contents('./contacts.txt', $row, FILE_APPEND);


    $message = 'Спасибо! Мы с вами свяжемся.';
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<?php if ($message) : ?>
    <?= $message ?>
    <?php else: ?>
<form action="index.php" method="post">
    <p>Представьтесь</p>
    <input type="text" name="name">
    <p>Укажите ваш номер</p>
   <input type="text" name="phone">
    <button type="submit">отправить</button>
</form>
<?php endif; ?>


</body>
</html>