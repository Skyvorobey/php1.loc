<div class="task-1">
    <h2>Задание 1</h2>
        <?php include __DIR__ . '/classes/GuestBook.php';
        $guestbook = new GuestBook(__DIR__ . '/data/guest_book.txt');

        foreach ($guestbook->getData() as $value) {
        $guest_value = explode(',', $value);
        ?>

    <div style="border: 1px solid #ccc; padding: 15px;">
        <b><?php echo $guest_value['0']; ?></b> <?php echo $guest_value['1']; ?>
        <div style="font-style: italic;"><?php echo $guest_value['2']; ?></div>
    </div>
    <?php
    }
    ?>
</div>

<div class="task-2">
    <div class="gallery-photo-items">
        <?php
        $directory = __DIR__ . '/images/';
        $image = array_diff(scandir($directory), array('..', '.', '.DS_Store'));

        foreach ($image as $item) {
            echo '<img style="height: 300px; width: 300px" src="images/'.$item.'">';
        }
        ?>
    </div>

    <?php include __DIR__ . '/classes/Uploader.php';
    $uploader = new Uploader();
    $uploader->upload()?>

    <form action="/dz6/index.php" method="post" enctype="multipart/form-data">
        <input type="file" name="file_name">
        <input type="submit" name="submit" value="Загрузить">
    </form>
</div>
