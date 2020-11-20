 <div class="task-1">
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
    <?php
    $photo = include 'array.php';

    foreach ($photo as $key => $name_arr)
    {
        echo '<a href="image.php/?image_id='.$key.'"><img style="height: 300px; width: 300px" src="img/'.$name_arr.'"></a>';
    }
    ?>

</div>
