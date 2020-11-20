<?php
include __DIR__ . '/TextFile.php';
class GuestBook extends TextFile {

    protected $path; //путь

    public function __construct($path)
    {
        $this->path = $path;
        $this->data = file($this->path);
    }

    public function append($text)
    {
        $this->data[] = "\n" . $text;
    }

    public function save()
    {
        file_put_contents($this->path, $this->data);
    }

}


