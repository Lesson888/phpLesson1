<?php

spl_autoload_register();

echo '<pre>';

$db = new databace();
$data = $db->getOne(2);
print_r($data);

?>

