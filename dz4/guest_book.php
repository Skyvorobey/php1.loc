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
    <?php include(__DIR__ . '/scripts/guest_book/array.php');
    $fopen = fopen(__DIR__ . '/data/guest_book.txt', 'r');
    ?>
    <p><?php echo seeGuest($fopen); ?></p>
    <form action="guest_book.php" method="post">
        <input type="text"  name="new_rec" autocomplete="off" placeholder="Введите запись">
        <button type="submit" name="submit">Добавить</button>
        <?php include(__DIR__ . '/scripts/guest_book/script_book.php'); ?>
    </form>

</body>
</html>