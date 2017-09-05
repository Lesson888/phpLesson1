<?php
//[Название, Цена, Описание]
$products = [
    ['Шапка мужская', 100,'Крутая шапка', "4.png"],
    ['Штаны женские', 100, 'Стильные штаны', "5.png"],
    ['Мяч волейбольный', 100, 'Круглый мяч', "8.png"],
    ['Джинсы', 100, 'Джинсы импортные', "7.png"],
    ['Футболка', 100, 'Футболка с рисунком единорога', "6.png"],
];


/**
 * Возвращает название товара
 *
 * @param $product
 * @return mixed
 */
function getName($product)
{
    return $product[0];
}
/**
 * Возвращает цену товара
 *
 * @param $product
 * @return mixed
 */
function getPrice($product)
{
    return $product[1];
}
/**
 * Возвращает описание товара
 *
 * @param $product
 * @return mixed
 */
function getDescription($product)
{
    return $product[2];
}

function getImage($product) {
    return $product[3];
}

/**
 *
 *
 * @param $product
 * @return mixed
 */

function getLink($product)
{
    return $product[4];
}

$products_new = [
    [
        'name' => 'Волейбольный мяч',
        'price' => 1500,
        'description' => 'Cделан в Японии',
        'image' => '8.png',
        'link' => 'http://google.com',
        'colors' => ['Белый','Голубой','Зеленый'],
    ],
    [
        'name' => 'Шапка',
        'price' => 2880,
        'description' => 'Зимний вариант. Классическая шапка. Подходит как для повседневного ноешния так и для занятий спортом. Сделана из натуральной шерсти. Подходит как мужчинам, так и женщинам',
        'image' => '4.png',
        'link' => 'http://yandex.ru',
        'colors' => ['Коричневый','Фиолетовый','Черный'],
    ]
];