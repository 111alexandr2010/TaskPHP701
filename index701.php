<?php
session_start();
require_once __DIR__ . '/User.php';
require_once __DIR__ . '/Session.php';

$error = null;

if (count($_POST) > 0){
    $login = $_POST['login'];
    $pass = $_POST['pass'];
    $user = new User();

    if ($user->check($login, $pass) === true){
        header('Location:/Task701/home701.php');
        exit();
    } else {
        $error = 'Введите верные данные!';
        session_destroy();
    }
}
$session = new Session();
$session->set('login', $login);
$session->set('pass', $pass);

if (isset($_SESSION['login']) && isset($_SESSION['pass'])){
    $login = $session->get('login');
    $pass = $session->get('login');
    if ($user->check($login, $pass) === true){
        header('Location:/Task701/home701.php');
        exit();
    }
}
?>

<p style="color:red;"><?= $error; ?></p>
<html><body>
<form method="post" action="/Task701/index701.php">
    <p>Введите "логин" <input type="text" name="login"></p>
    <p>Введите "пароль" <input type="password" name="pass" ></p>
    <p><input type="submit" value="OK"></p>
</form>
</body> </html>

