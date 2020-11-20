<?php require __DIR__ . '/discriminant/discriminant.php';?>
<?php require __DIR__ . '/guesser_name/guesser_name.php';?>
<div class="task-1">
    <h2> Задание 1 </h2>
    <p>1. Напишите программу, которая составит и выведет в браузер таблицу истинности для логических операторов &&, || и xor.</p>
    <div class="table-1">
        <h3>Таблица 1</h3>
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
    <p class="commit" style="font-weight: bold"> Ответ: <span style="font-weight: normal">
            Введите значения в index.php (task-2): <br>
            <?php echo quadratic_equation(2, 4, 3); ?>
        </span></p>
</div>

<div class="task-4">
    <p class="commit" style="font-weight: bold"> Ответ: <span style="font-weight: normal">
            Введите значения в index.php (task-4): <br>
            <?php echo guesser_the_name('Дарья'); ?>
        </span></p>
</div>
