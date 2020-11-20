<?php
include __DIR__ . '/TextFile.php';
class Uploader extends TextFile
{
    //В конструктор передается имя поля формы, от которого мы ожидаем загрузку файла
    public function __construct($field_name_form)
    {
        $this->data = $field_name_form;
    }

    //Метод isUploaded() проверяет - был ли загружен файл от данного имени поля
    public function isUploaded() {
        if ($_FILES[$this->data] === 1) {
            return true;
        }
        return false;
    }

    //Метод upload() осуществляет перенос файла (если он был загружен!) из временного места в постоянное
   public function upload() {
        if ($this->isUploaded()) {
            move_uploaded_file($_FILES[$this->data]['tmp_name'], __DIR__ . '/images' . $_FILES[$this->data]['name']);
        }
    }
}