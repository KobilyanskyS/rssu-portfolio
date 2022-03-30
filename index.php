<?php
session_start();

$users = 'admin';
$pass = 'mypass';

if ($users == $_POST['login'] and $pass == $_POST['password']) {
    $_SESSION['admin'] = $users;
} else echo '<h1>Логин или пароль неверны!</h1>';

if($_SESSION['admin'] != "admin"){
    header("refresh:3;url=login.html");
} else{
    echo "Добро пожаловать, ".$_SESSION['admin'];
}
?>

<div><a href="logout.php">ВЫЙТИ</a></div>
