<?php

class Uploader
{
    public $file_img;
    public function __construct($file_img)
    {
        $this->file_img = $file_img;
    }

    public function isUploaded() {
        $files = $_FILES[$this->file_img];

        if (isset($files)) {
            if ((0 === $files['error']) &&
            (('image/png' === $files['type']) ||
                'image/jpeg' === $files['type']))  {
            return true;
        }   else
            echo 'Досупные форматы для загрузки "png" и "jpeg" ';
            return false;
        }
    }

    public function upload() {
        if ($this->isUploaded() === true) {
            $files = $_FILES[$this->file_img];
           if (isset($files)) {
               move_uploaded_file($files['tmp_name'],
                   __DIR__ . '/../images/' . $files['name'] );

               $host  = $_SERVER['HTTP_HOST'];
               $uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
               $extra = 'index.php';
               header("Location: http://$host$uri/$extra");
            }
        }
    }
}