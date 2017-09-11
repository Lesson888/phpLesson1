<?php
if($_POST["name"] == "")
    echo "Введите имя. <a href='/'>Иправить</a>";
else
    header("Location:homework1.php");
?>