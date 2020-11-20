<?php
function guesser_the_name($name) {
    $male = ' - имя мужское';
    $female = ' - имя женское';
switch ($name) {
    case ($name === null) :
        return 'Заполните поле "name".';
        break;
    case(mb_substr($name, -2) === 'ия') :
        return $name . $female;
        break;
    case(mb_substr($name, -2) === 'ра') :
        return $name . $female;
        break;
    case(mb_substr($name, -2) === 'да') :
        return $name . $female . ' скорее всего';
        break;
    case(mb_substr($name, -2) === 'ей') :
        return $name . $male;
        break;
    case(mb_substr($name, -2) === 'ав') :
        return $name . $male;
        break;
    case(mb_substr($name, -2) === 'др') :
        return $name . $male;
        break;
    case(mb_substr($name, -2) === 'ан') :
        return $name . $male;
        break;
    case(mb_substr($name, -2) === 'на') :
        return $name . $female;
        break;
    case(mb_substr($name, -2) === 'ет') :
        return $name . $male;
        break;
    case(mb_substr($name, -2) === 'ав') :
        return $name . $male;
        break;
    case(mb_substr($name, -2) === 'ья') :
        return $name . $female;
        break;
    case(mb_substr($name, -2) === 'ла') :
        return $name . $female;
        break;
    case(mb_substr($name, -2) === 'ий') :
        return $name . $male;
        break;
    case(mb_substr($name, -2) === 'рт') :
        return $name . $male;
        break;
    case(mb_substr($name, -2) === 'ор') :
        return $name . $male;
        break;
    case(mb_substr($name, -2) === 'ег') :
        return $name . $male;
        break;
    case(mb_substr($name, -2) === 'ин') :
        return $name . $male;
        break;
    case(mb_substr($name, -2) === 'ий') :
        return $name . $male;
        break;

    default :
        return 'Что то пошло не так... <br>
 1. Возможно, вы забыли ввести имя. <br>
 2. Возможно, вы ввели цифру. <br>
 3. Возможно, вы ввели сокращеный вариант имени, (не Александр, а Саша).<br>
 4. Возможно, вы ввели текст на латинице, (не Александр, а Alexander).<br>
 5. А возможно, я прописал не все условия, попробуйте еще раз, если ошибка повторяется, сообщите об ошибке мне.';
        break;
    }
}

assert('Мария - имя женское' == guesser_the_name('Мария'));
assert('Евгений - имя мужское' == guesser_the_name('Евгений'));

?>
