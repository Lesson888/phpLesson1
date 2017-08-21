<?php

$message = false;


if (isset($_REQUEST['name']) and isset ($_REQUEST['phone'])) {

    $name = $_REQUEST ['name'];
    $phone = $_REQUEST ['phone'];

    $row = 'Здравствуйте, ' . $name .
        '. Ваш номер. ' . $phone . PHP_EOL;
    file_put_contents('./contacts.txt', $row,FILE_APPEND);


    $message = 'Спасибо! Мы с вами свяжемся.';
} else {
    echo 'Не указаны параметры';
}

