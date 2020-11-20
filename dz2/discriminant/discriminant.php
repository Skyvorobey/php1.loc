<?php
function discriminant_expression($a, $b, $c) {
    $d = (($b * $b) - (4 * $a * $c));
    return $d;
}

assert(0 === discriminant_expression(0, 0, 0));
assert(-128 === discriminant_expression(4, 8, 12));
assert(-44 === discriminant_expression(3, 2, 4));
assert(436 === discriminant_expression(2, 22, 6));
assert(-23 === discriminant_expression(3, 5, 4));
assert(-108 === discriminant_expression(6, 6, 6));

function quadratic_equation ($a, $b, $c) {

    if ( ($a !== null) && ($a !== 0 ) ) {
        if ($a == settype($a, 'int') && ($b == settype($b, 'int')) && ($c == settype($c, 'int' ))) {
            echo 'Квадратное уравнение ' . $a . 'x<sup>2</sup>+' . $b . 'x+' . $c . '=0' ; {
                echo '<br>' . 'Дискриминант квадратного уравнения = ' . discriminant_expression($a, $b, $c);
            }
        } else {
            echo 'Значения переменных, должны быть целым числом!';
        }
    } else {
        echo $a . 'не должна быть пустой строкой, или равняться нулю';
    }
}


