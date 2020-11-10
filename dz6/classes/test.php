<?php


class Table {
    public $color;
    public $legs;
    public function show() {
        echo 'Привет, я стол! ';
        echo 'На ' . $this->legs . ' ногах';
    }
}

    $table = new Table;
    $table->color = 'black';
    $table->legs = 4;
    $table->show();