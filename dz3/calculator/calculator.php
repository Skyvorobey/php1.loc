<?php

if(isset($_GET['submit'])) {
    $a = $_GET ['num_1'];
    $b = $_GET['num_2'];
    $c = $_GET['operation'];

    if ($c === '-') {
        $r = ($a - $b);
        echo $r;
    }

    if ($c === '+') {
        $r = ($a + $b);
        echo $r;
    }

    if ($c === '*') {
        $r = ($a * $b);
        echo $r;
    }

    if (($c === '/') && ($b !== '0')){
        $r = ($a / $b);
        echo $r;
    } else {
        if (($c === '/') && ($b === '0')){
            $r = 'на ноль нельзя делить';
        echo $r;
        }
    }


}
