<?php


delete(3);


if (isset($_POST['submit'])) {
    add($_POST);
    echo 'Товар добавлен';
}


function delete ($id)
{
    $elements = getAll();
    $row = $id - 1;

    unset($elements[$row]);

    $rows = [];
    foreach ($elements as $element) {
        $rows[] = implode("\t", $element);
    }
    $rows = implode ("\t", $rows);


    if (! strlen($rows)) $rows = "\t" . PHP_EOL;
    $result = file_put_contents('./products.csv', $rows);


    $row = implode("\t", $elements) . PHP_EOL;
    $result = file_put_contents('./products.csv', $row);
    if ($result) {
        return true;
    } else {
        return false;
    }
}

// Получение одной записи
function get($id)
{
    $row = $id - 1;
    if (isset(getAll()[$row])) {
        return getAll()[$row];
    }
    else {
        return false;
    }
}

// Получение всех записей
function getAll( filename: './products.csv');
{
    $elements = [];
    $rows = file()
    foreach (file('./products.csv') as $row)
    {
        $element = explode("\t", $row);
        $elements[] = $element;
    }

    return $elements;
}

// Добавление в базу
function add($data)
{
    $title = $data['title'];
    $price = $data['price'];

    $row = $title . "\t" . $price . PHP_EOL;
    file_put_contents('./products.csv', $row, FILE_APPEND);
}


