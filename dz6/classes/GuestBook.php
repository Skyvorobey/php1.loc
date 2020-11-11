<?php

class GuestBook {
    //В конструктор передается путь до файла с данными гостевой книги, в нём же происходит чтение данных из ней (используйте защищенное свойство объекта для хранения данных)

    //Данные
    protected $data;
    protected $path; //путь

    public function __construct($path)
    {
        //путь до файла с данными гостевой книги
        $this->path = $path;
        //чтение данных
        $this->data = file($this->path);
    }

    //Метод getData() возвращает массив записей гостевой книги
    public function getData()
    {

    }

    //Метод append($text) добавляет новую запись к массиву записей
    public function append($text)
    {

    }

    //Метод save() сохраняет массив в файл
    public function save()
    {

    }
}


