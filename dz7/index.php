<?php
    require_once 'application/views/view.php';

    $view = new View;
    $view->assign('vasya', 1);
    $view->assign('petya', 2);

    //отладка
    var_dump($view);
    var_dump($view->transmitted_value);
    
    $view->display('test_template');