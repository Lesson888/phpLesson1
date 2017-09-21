<?php

$message = false;

if (isset($_REQUEST['name']) and isset($_REQUEST['phone']) and isset($_REQUEST['comment'])) {
        $name = $_REQUEST['name'];
        $phone = $_REQUEST['phone'];
        $comment = $_REQUEST['comment'];

        $row = 'Здравствуйте, ' . $name .
                '. Ваш номер: ' . $phone .
                'Комментарий' . comment . PHP_EOL;

        file_put_contents('./contacts.txt',
                $row, FILE_APPEND);

        $message = 'Спасибо! Мы с Вами свяжемся.';
    }

 ?>
