 <div class="task-1">
     <a href="guest_book.php">Гостевая Книга.</a>
 </div>

 <div class="task-2">
     <?php
     $directory = __DIR__ . '/images/';
     $image = array_diff(scandir($directory), array('..', '.', '.DS_Store'));

     foreach ($image as $item) {
         echo '<img style="height: 300px; width: 300px" src="images/'.$item.'">';
     }
     ?>

     <form action="/dz4/index.php" method="post" enctype="multipart/form-data">
         <input type="file" name="file_name">
         <input type="submit" value="Загрузить">
         <?php include __DIR__ . '/scripts/form_upload/form_upload.php' ?>
     </form>
 </div>
