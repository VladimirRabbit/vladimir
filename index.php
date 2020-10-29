<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="send.php" method="post">
        <input type="text" name="komment" placeholder="Комментарий" id="">
        <input type="text" name="fio" placeholder="ФИО" id="" required>
        <input type="text" name="adress"  placeholder="Адрес"id="">
        <input type="email" name="email" placeholder="Емаил" id="">
        <input type="tel" name="mobil"  placeholder="Телефон"id="" required>
        <input type="text" name="file" placeholder="Файл" id="">
        <input type="submit" value="Отправить">
    </form>
</body>
</html>