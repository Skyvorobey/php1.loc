<?php
if (isset ($_POST['submit'])) {
    if (($_POST['new_rec']) !== '') {
        $file = fopen(__DIR__ . '/../../data/guest_book.txt', 'a');
        $new_r = ($_POST['new_rec']);
        fwrite($file, date('d.m.Y H:i:s', time())) .
        fwrite($file, ', ') .
        fwrite($file, $new_r) .
        fwrite($file, '; ') .
        fclose($file);

        $host  = $_SERVER['HTTP_HOST'];
        $uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
        $extra = 'guest_book.php';
        header("Location: http://$host$uri/$extra");
    } else {
        echo 'Необходимо заполните поле!';
    }
}
?>