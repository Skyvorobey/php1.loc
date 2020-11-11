<?php

class GuestBook {
    //В конструктор передается путь до файла с данными гостевой книги, в нём же происходит чтение данных из ней (используйте защищенное свойство объекта для хранения данных)

    //Данные
    public $data;

    public function __construct($path)
    {
        //путь до файла с данными гостевой книги
        $this->data = __DIR__ . '/../' . $path;

        //чтение данных

        $guest_book_array = file_get_contents($this->data, 'r');
        $guest_book_string = explode(',', $guest_book_array);

        echo $guest_book_string['0'] . $guest_book_string['1'] . $guest_book_string['2'];
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


