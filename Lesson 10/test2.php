
<?php
require_once './test1.php';
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<table>
    <?php foreach (getAll() as $key => $product) : ?>
        <tr>
            <td><?php echo $product[0] ?? '' ?></td>
            <td><?php echo $product[1] ?? '' ?></td>
            <td>
                <button> <a href="<?php echo './view.php?id=' . ($key + 1) ?>">Редактировать</a></button>
            </td>
            <td>
                <form action="/Lesson%2010/test2.php" method="post">
                    <input type="hidden" name = "id" value="<?php echo $key + 1 ?>">
                    <button type="submit" name="delete">Удалить</button>
                </form>
            </td>
        </tr>
    <?php endforeach; ?>
</table>

<form action="/Lesson%2010/test2.php" method="post">
    <input type="text" name="title" placeholder="Название">
    <input type="text" name="price" placeholder="Цена">
    <button type="submit" name="submit">Добавить</button>
</form>
</body>
</html>