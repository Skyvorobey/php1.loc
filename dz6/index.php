<?php include __DIR__ . '/classes/GuestBook.php';

$guestbook = new GuestBook('data/guest_book.txt');
var_dump($guestbook->data);

?>
