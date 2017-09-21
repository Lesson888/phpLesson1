<?php

spl_autoload_register();

echo '<pre>';

$review = new \Model\Review();
$data = [
    'name' => 'Наталья',
    'phone' => '+7960068****',
    'text' => 'Привет, мир!',
];
$review->create($data);
print_r($data);


?>

