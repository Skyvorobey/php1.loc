<?php include_once (__DIR__ . '/scripts/guest_book/return_file.php');
echo return_file('data/guest_book.txt');
?>

<form action="guest_book.php" method="post">
    <input type="text"  name="new_rec" autocomplete="off" placeholder="Введите запись">
    <button type="submit" name="submit">Добавить</button>
    <?php include(__DIR__ . '/scripts/guest_book/script_book.php'); ?>
</form>
