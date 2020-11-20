<?php

$photo = include 'array.php';

$num_id = $_GET['image_id'];
$key = $photo[$num_id];?>

<img style="height: 600px; width: 600px" src="../img/<?php echo $key?>">
