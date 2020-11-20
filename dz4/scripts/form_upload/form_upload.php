<?php
if (isset($_FILES['file_name'])) {
    $file_weight = $_FILES['file_name']['size'];
    $file_original_name = $_FILES['file_name']['name'];
    $file_tmp_name = $_FILES['file_name']['tmp_name'];
    $file_type = $_FILES['file_name']['type'];
    $file_error = $_FILES['file_name']['error'];

    $images_url = __DIR__ . '/../../images/';

    if ((0 === $file_error) && (('image/png' === $file_type) || (('image/jpeg' === $file_type)))) {
       move_uploaded_file($file_tmp_name, $images_url . $file_original_name);
       echo 'Файл успешно загружен!';

        $host  = $_SERVER['HTTP_HOST'];
        $uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
        $extra = 'index.php';
        header("Location: http://$host$uri/$extra");

    } else {
        echo 'Формат загружаемых файлов должен быть jpeg или png!';
    }
}
?>



