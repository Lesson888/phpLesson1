<?php
$x = 15;
if(isset($x)) echo "Переменная существует";
else echo "Переменная не существует";
echo "<br />";
unset($x);
if(isset($x)) echo "Переменная существует";
else echo "Переменная не существует";
echo "<br />";


$x = "15";
$bool = false;
$null;

echo "Is Numeric - ".is_numeric($x)."<br />";
echo "Is Integer - ".is_integer($x)."<br />";
echo "Is Double - ".is_double($x)."<br />";
echo "Is String - ".is_string($x)."<br />";
echo "Is Boolean - ".is_bool($bool)."<br />";
echo "Is Scalar - ".is_scalar($bool)."<br />";
echo "Is Null - ".is_null($x)."<br />";
echo "Is Array - ".is_array($x)."<br />";
echo "Type - ".gettype($x)."<br />";
echo "Type - ".gettype($x)."<br />";
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Функции для работы с типами переменных. Урок №20.</title>
</head>
<body>

</body>
</html>
