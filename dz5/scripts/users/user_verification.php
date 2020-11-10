<?php

//Возвращает массив всех пользователей и хэшей их паролей.
function getUsersList() {
    return include __DIR__ . '/../../data/users/users.php';
}


//Проверяет - существует ли пользователь с заданным логином.
function existsUser($login) {
    $users = getUsersList();

    foreach ($users as $user) {
        if ($user['login'] === $login) {
            return true;
        }
    }
    return false;
}


//true тогда, когда существует пользователь с указанным логином и введенный им пароль прошел проверку
function checkPassword($login, $password) {
    if (true === existsUser($login)) {
        $users = getUsersList();

        foreach ($users as $user) {
            if (($user['login'] === $login) && (password_verify($password, $user['password']))) {
                return true;
            }
        }
        return false;
    }
}


//Возвращает либо имя вошедшего на сайт пользователя, либо null.
function getCurrentUser() {
    if (isset($_SESSION['user'])) {
        return $_SESSION['user'];
    } else {
        return null;
    }
}
