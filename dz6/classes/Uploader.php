<?php
include __DIR__ . '/TextFile.php';
class Uploader extends TextFile
{
    public function __construct($field_name_form)
    {
        $this->data = $field_name_form;
    }

    public function isUploaded() {
        if ($_FILES[$this->data] === 1) {
            return true;
        }
        return false;
    }

   public function upload() {
        if ($this->isUploaded()) {
            move_uploaded_file($_FILES[$this->data]['tmp_name'], __DIR__ . '/images/' . $_FILES[$this->data]['name']);
        }
    }
}