<?php

class Uploader
{
    public $file_img;
    public function __construct($file_img)
    {
        $this->file_img = $file_img;
    }

    public function isUploaded() {

        if (isset(($_FILES[$this->file_img]))) {
            if ((0 === $_FILES[$this->file_img]['error']) &&
            (('image/png' === $_FILES[$this->file_img]['type']) ||
                'image/jpeg' === $_FILES[$this->file_img]['type']))  {
            return true;
        }   else
            echo 'Досупные форматы для загрузки "png" и "jpeg" ';
            return false;
        }
    }

    public function upload() {
        if ($this->isUploaded() === true) {
           if (isset($_FILES[$this->file_img])) {
               move_uploaded_file($_FILES[$this->file_img]['tmp_name'],
                   __DIR__ . '/images/' . $_FILES[$this->file_img]['name'] );
            }
        }
    }
}