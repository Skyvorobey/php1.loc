<?php
include __DIR__ . '/TextFile.php';
class GuestBook extends TextFile {
    //В конструктор передается путь до файла с данными гостевой книги, в нём же происходит чтение данных из ней (используйте защищенное свойство объекта для хранения данных)

    protected $path; //путь

    public function __construct($path)
    {
        //путь до файла с данными гостевой книги
        $this->path = $path;
        //чтение данных
        $this->data = file($this->path);
    }

//Метод append($text) добавляет новую запись к массиву записей
    public function append($text)
    {
        $this->data[] = "\n" . $text;
    }

    //Метод save() сохраняет массив в файл
    public function save()
    {
        file_put_contents($this->path, $this->data);
    }

}


