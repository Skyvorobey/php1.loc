<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Гостевая Книга</title>
</head>
<header>
    <h1>Гостевая Книга.</h1>
</header>
<body>
    <?php

    include(__DIR__ . '/classes/GuestBook.php');

    function seeGuest() {
        $fopen = fopen(__DIR__ . '/data/guest_book/guest_book.txt', 'r');
        while (!feof($fopen)) {
            $str = fgets($fopen);
            echo $str . '<br>';
        }
        fclose($fopen);
    }
    echo seeGuest();

    ?>

    <form action="guest_book.php" method="post">
        <input type="text"  name="new_rec" autocomplete="off" placeholder="Введите запись">
        <button type="submit" name="submit">Добавить</button>

    </form>

</body>
</html>