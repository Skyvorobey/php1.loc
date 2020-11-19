<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php include __DIR__ . '/classes/GuestBook.php';
$guestbook = new GuestBook(__DIR__ . '/data/guest_book.txt');
$guestbook->getData();

foreach ($guestbook->getData() as $value) {
    $guest_value = explode(',', $value);
    ?>
    <div style="border: 1px solid #ccc; padding: 15px;">
        <b><?php echo $guest_value['0']; ?></b> <?php echo $guest_value['1']; ?>
        <div style="font-style: italic;">
            <?php echo $guest_value['2']; ?>
        </div>
    </div>
    <?php
}
?>

</body>
</html>