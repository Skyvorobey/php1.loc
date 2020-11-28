<?php

class View
{
    public $transmitted_value; //public сменить на protected после отладки
    public $return_template; //public сменить на protected после отладки

            //assign = 'назначить';
    public function assign($name, $value) {
        return $this->transmitted_value[] = $name . ',' . $value . "\n";
    }

    public function display($template) {
        require_once __DIR__ . '/templates' . "/$template" . '.php';
    }

    public function render($template) {
        return $this->return_template = __DIR__ . '/templates' . "/$template" . '.php';
    }
}