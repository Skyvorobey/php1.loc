<?php
session_start();
include __DIR__ . '/scripts/users/user_verification.php'; ?>

<div class="welcome">
    <?php
    if (getCurrentUser() === null) {
        echo  'Что бы воспользоваться функционалом сайта, необходимо залогиниться: ' . '<a href="login.php">Войти</a>';
    }   else    {
        echo 'Доброго времени суток, ' . getCurrentUser() . '!';
    }
    ?>
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
        <form action="/dz5/index.php" method="post" enctype="multipart/form-data">
            <input type="file" name="file_name">
            <input type="submit" value="Загрузить">
            <?php include __DIR__ . '/scripts/gallery/gallery_upload.php' ?>
        </form>
    </div>
</div>