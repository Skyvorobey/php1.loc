<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php

$photo = include 'array.php';

$num_id = $_GET['image_id'];
$key = $photo[$num_id];?>

<img style="height: 600px; width: 600px" src="../img/<?php echo $key?>">
</body>
</html>
