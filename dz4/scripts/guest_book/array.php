<?php

function seeGuest($array) {
    while (!feof($array)) {
        $str = fgets($array);
        echo $str . '<br>';
    }
    fclose($array);
}

?>