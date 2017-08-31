<?php

$message = false;//


if (isset($_REQUEST['name']) and isset ($_REQUEST['phone'])) {

    $name = $_REQUEST ['name'];//Для сокращения
    $phone = $_REQUEST ['phone'];


    if (empty($name)||empty($phone)){
        echo "Заполните поля";
    }else{

        $row = 'Здравствуйте, ' . $name .
            '. Ваш номер. ' . $phone . PHP_EOL;

        //PHP_EOL='\n'

        file_put_contents('./css/contacts.txt', $row, FILE_APPEND);


    $message = 'Спасибо! Мы с вами свяжемся.';
}

}

?>

<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">

</head>
<body>

<?php if ($message) : ?>
    <?= $message ?>
    <?php else: ?>
<form class="form-horizontal" role="form" action="index.php" method="post">
    <div class="form-group">
        <label for="name" class="col-sm-2 control-label">Имя</label>
        <div class="col-sm-10">
            <input
            type="text"
            name="name"
            class="form-control"
            placeholder="имя">
        </div>
    </div>

    <div class="form-group">
        <label for="phone" class="col-sm-2 control-label">Номер телефона</label>
        <div class="col-sm-10">
            <input
                type="text"
                name="phone"
                class="form-control"
                placeholder="Введите текст">
        </div>
    </div>
<div class="col-sm-offset-2 col-sm-10">
    <button type="submit" class="btn btn-default">отправить</button>
</div>

</form>
<form>

<?php endif; ?>

    <form action="index.php" method="POST">
        <input type="text" name="">
        <input type="text" name="lastname">
        <input type="text" name="email">
        <input type="text" name="phone">
        <input type="text" name="phone" placeholder="Телефон">
        <p>О себе</p>
        <textarea name="about" id="about" cols="30" rows="10"></textarea>
        <p>Пол</p>
        <input type="radio" name="gender" value="male">
        <input type="radio" name="gender" value="female">
        <p>Возраст</p>
        <input type="namber" name="age">
        <p>Хобби</p>
        <select name="hobby" id="hobby">
            <option value="sport">Спорт</option>
            <option value="photos">Фотографии</option>
            <option value="programming">Программирование</option>
        </select>
        <input type="submit" value="Отправить">
    </form>

</body>
</html>