<?php
include __DIR__ . '/user_verification.php';

if (isset($_POST['login']) && isset($_POST['password'])) {
    if (checkPassword($_POST['login'], $_POST['password'])) {
        $_SESSION ['user'] = $_POST['login'];
    }
}

if (getCurrentUser() !== null) {
    header('Location: index.php');
} else { ?>
    <form method="post" action="login.php">
        <input type="text" name="login" placeholder="Логин" autocomplete="off"><br>
        <input type="password" name="password" placeholder="Пароль" autocomplete="off"><br>
        <input type="submit" name="button" value="Войти">
    </form>
<?php   }