<?php
//[Название, Цена, Описание]
$products = [
    ['Шапка мужская', 1=>100, 2=>'Крутая шапка'],
    ['Штаны женские', 100, 'Стильные штаны'],
    ['Мяч волейбольный', 100, 'Круглый мяч'],
    ['Джинсы', 100, 'Джинсы импортные'],
    ['Футболка', 100, 'Футболка с рисунком единорога'],
];


function getName($product)
{
    return $product[0];
}

function getPrice($product)
{
    return getPrice[1];
}

function getDescription($product)
{
    return getDescription[2];
}

echo '<pre>';
var_dump($products);
exit();