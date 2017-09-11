<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Обработка форм. Урок №19.</title>
</head>
<body>

<form name="test" action="proba1.php" method="post">
<label>Имя: </label> <br />
<input type="text" name="name" placeholder="Имя" /><br />
<label>Email: </label> <br />
<input type="text" name="email" placeholder="Email" /><br />
    <label>Сообщение: </label><br />
    <textarea name="message" cols="40" rows="20"></textarea>
    <br />
    <input type="submit" name="done" value="Готово" />
</form>

</html>