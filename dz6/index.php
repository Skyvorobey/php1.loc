<?php include __DIR__ . '/classes/GuestBook.php';
$guestbook = new GuestBook(__DIR__ . '/data/guest_book.txt');
$guestbook->append('Тест');
var_dump($guestbook);

?>
<div style="border: 1px solid #ccc; padding: 15px;">
    <b>Иванов Иван</b> (11.11.2020 16:25)
    <div style="font-style: italic;">
        Привет!
    </div>
</div>

<?php

$path = __DIR__ . '/data/guest_book.txt';

function echo_guest_book($path) {
    if (file_exists($path) === true) {
        $res = fopen($path, 'r');

        echo '<div style="border: 1px solid #ccc; padding: 15px;">';
        while (!feof($res)) {
            $array = fgets($res);
            $explode_array = explode(',', $array);
            $name = $explode_array['0'];
            $when = $explode_array['1'];
            $comment = $explode_array['2'];
            echo '<b>' . $name . '</b>' . $when;
            echo '<div>' . $comment . '</div>';
        }
        echo '</div>';
    }   else {
        echo 'Не верный путь:' . $path;
    }
}
echo echo_guest_book($path);


?>