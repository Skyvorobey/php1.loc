<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Домашняя задание №2</title>
</head>
<?php require __DIR__ . '/discriminant/discriminant.php';?>
<?php require __DIR__ . '/guesser_name/guesser_name.php';?>
<header>
    <h1>Домашнее задание №2.</h1>
</header>

<body>
    <div class="task-1">
        <h2> Задание 1 </h2>
        <p>1. Напишите программу, которая составит и выведет в браузер таблицу истинности для логических операторов &&, || и xor.</p>
        <div class="table-1">
            <h3>Таблица 1</h3>
            <?php ?>
            <table border="3" cellpadding="10px"  class="table__&&">
                <tr>
                    <th>&&</th>
                    <th>0</th>
                    <th>1</th>
                </tr>
                <tr>
                    <th>0</th>
                    <td><?php echo (int)(false && false); ?></td>
                    <td><?php echo (int)(true && false); ?></td>
                </tr>
                <tr>
                    <th>1</th>
                    <td><?php echo (int)(false && true); ?></td>
                    <td><?php echo (int)(true && true); ?></td>
                </tr>
            </table>
        </div>

        <div class="table-2">
            <h3>Таблица 2</h3>
            <table border="3" cellpadding="10px" class="table__||">
                <tr>
                    <th>||</th>
                    <th>0</th>
                    <th>1</th>
                </tr>
                <tr>
                    <th>0</th>
                    <td><?php echo (int)(false || false); ?></td>
                    <td><?php echo (int)(true || false); ?></td>
                </tr>
                <tr>
                    <th>1</th>
                    <td><?php echo (int)(false || true); ?></td>
                    <td><?php echo (int)(true || true); ?></td>
                </tr>
            </table>
        </div>

        <div class="table-3">
            <h3>Таблица 3</h3>
            <table border="3" cellpadding="10px" class="table__xor">
                <tr>
                    <th>xor</th>
                    <th>0</th>
                    <th>1</th>
                </tr>
                <tr>
                    <th>0</th>
                    <td><?php echo (int)(false xor false); ?></td>
                    <td><?php echo (int)(true xor false); ?></td>
                </tr>
                <tr>
                    <th>1</th>
                    <td><?php echo (int)(false xor true); ?></td>
                    <td><?php echo (int)(true xor true); ?></td>
                </tr>
            </table>
        </div>
    </div>

    <div class="task-2">
        <h2> Задание 2</h2>
        <p> 2. Составьте функцию вычисления дискриминанта квадратного уравнения. Покройте ее тестами. Используя эту функцию, напишите программу, которая решает квадратное уравнение. Оформите красивый вывод решения.</p>

        <p class="commit" style="font-weight: bold"> Ответ: <span style="font-weight: normal">
                Введите значения в index.php (task-2): <br>
                <?php echo quadratic_equation(2, 4, 3); ?>
            </span></p>
    </div>

    <div class="task-3">
        <h2> Задание 3</h2>
        <p>3. Проведите самостоятельное исследование на тему "Что возвращает оператор include, если его использовать как функцию?". Используйте руководство по языку, составьте и приложите примеры, иллюстрирующие ваше исследование.
        </p>

        <p style="font-weight: bold">Ответ:
            <span style="font-weight: normal">Выражение include как и require включает и выполняет указанный файл. А возвращает булево (bool) значение, истину (true) или ложь (false);
                <br>https://www.php.net/manual/ru/function.include.php
            </span> <br>
        </p>

        <p style="font-weight: bold">Пример:
            <br>
            <span style="font-weight: normal">D = (10 * 10) - (4 * 20 * 30) = </span>
                <?php echo discriminant_expression(4, 20, 30); ?>
            <span style="font-weight: normal">(Подключил '/discriminant/discriminant.php', после чего смог вызвать функцию и увидить результат вычислений).</span>
        </p>

    </div>

    <div class="task-4">
        <h2>Задание 4</h2>
        <p> 4. Составьте функцию, которая на вход будет принимать имя человека, а возвращать его пол, пытаясь угадать по имени (null - если угадать не удалось). Вам придется самостоятельно найти нужные вам строковые функции. Начните с написания тестов для функции. </p>
        <p class="commit" style="font-weight: bold"> Ответ: <span style="font-weight: normal">
                Введите значения в index.php (task-4): <br>
                <?php echo guesser_the_name('Дарья'); ?>
            </span></p>
    </div>
</body>
</html>