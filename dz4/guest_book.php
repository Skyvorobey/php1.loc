<?php include(__DIR__ . '/scripts/guest_book/array.php');
$fopen = fopen(__DIR__ . '/data/guest_book.txt', 'r');
echo seeGuest($fopen); ?>

<form action="guest_book.php" method="post">
    <input type="text"  name="new_rec" autocomplete="off" placeholder="Введите запись">
    <button type="submit" name="submit">Добавить</button>
    <?php include(__DIR__ . '/scripts/guest_book/script_book.php'); ?>
</form>
