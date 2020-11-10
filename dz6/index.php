<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Домашняя задание №6</title>
</head>
<?php
session_start();
//include __DIR__ . '/scripts/users/user_verification.php';
?>
<header>
    <h1>Домашняя задание №6.</h1>
</header>
<body>
<main>
    <div class="welcome">
        <div>
            <a href="guest_book.php">Гостевая Книга.</a>
        </div>
        <p>
            <?php

            if (getCurrentUser() === null) {
                echo  'Что бы воспользоваться функционалом сайта, необходимо залогиниться: ' . '<a href="login.php">Войти</a>';
            }   else    {
                echo 'Доброго времени суток, ' . getCurrentUser() . '!';
            }
            ?>
        </p>
    </div>


    <div class="gallery-wrapper">
        <div class="gallery-photo-items">
            <?php
            $directory = __DIR__ . '/images/';
            $image = array_diff(scandir($directory), array('..', '.', '.DS_Store'));

            foreach ($image as $item) {
                echo '<img style="height: 300px; width: 300px" src="images/'.$item.'">';
            }
            ?>
        </div>

        <div class="gallery-form">
            <?php include __DIR__ . '/scripts/gallery/gallery_upload.php' ?>
            <form action="/dz6/index.php" method="post" enctype="multipart/form-data">
                <input type="file" name="file_name">
                <input type="submit" value="Загрузить">

            </form>
        </div>
    </div>


</main>

</body>
</html>