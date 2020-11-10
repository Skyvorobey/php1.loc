<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Домашняя задание №3</title>
</head>
<header>
    <h1>Домашнее задание №3.</h1>
</header>

<body>
    <div class="task-1">
        <h2>Задание №1.</h2>
        <p>1. Напишите программу-калькулятор <br>
            a. Форма для ввода двух чисел, выбора знака операции и кнопка "равно"<br>
            b. Данные пусть передаются методом GET из формы (да, можно и так!) на скрипт, который их примет и выведет выражение и его результат<br>
            c*. Попробуйте улучшить программу. Пусть данные отправляются на ту же страницу на PHP, введенные числа останутся в input-ах, а результат появится после кнопки "равно"</p>

        <form action="/dz3/index.php" method="get">
            <input type="number" name="num_1" required>
            <select type="list" name="operation">
                <option value="+"> + </option>
                <option value="-"> - </option>
                <option value="*"> * </option>
                <option value="/"> / </option>
            </select>
            <input type="number" name="num_2" required>
            <button type="submit" name="submit">=</button>
            <?php include __DIR__ . '/calculator/calculator.php' ?>
        </form>
    </div>

    <div class="task-2">
        <h2>Задание №2.</h2>
        <p>Создайте примитивную фотогалерею из двух страниц <br>
           1. Пусть на главной странице галереи выводятся 3-4 изображения<br>
           2. Каждое из них пусть будет ссылкой вида /image.php?id=42, где 42 - условный номер изображения<br>
           3. На странице image.php вы по номеру понимаете, какое изображение вывести в браузер и выводите его. Я ожидаю, что для этого пункта программы вы создатите массив вида [1 => 'cat.jpg', 2=>'dog.jpg', ... ], однако вы можете предложить и другое решение. Кстати, этот же массив вы используете и в пункте 1 - для вывода изображений!</p>

        <div>
            <?php
            $photo = include 'array.php';

            foreach ($photo as $key => $name_arr) {
    echo '<a href="image.php/?image_id='.$key.'"><img style="height: 300px; width: 300px" src="img/'.$name_arr.'"></a>';
}
?>
        </div>
    </div>
</body>
</html>