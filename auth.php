<?php
require_once("db.php");
session_start();
$new_login = $_POST['new_login'];
$new_password = $_POST['new_password'];

$login = $_POST['login'];
$password = $_POST['password'];

function authentication($log, $pass){
    $localhost = "localhost";
    $db = "portfolio_db";
    $user = "stanislav";
    $password = "ZDeBzyH)F!!FxB[7";
    $link = mysqli_connect($localhost, $user, $password);
    mysqli_query($link, "SET NAMES utf8;");
    mysqli_query($link, "SET CHARACTER SET utf8;");
    mysqli_select_db($link, $db);
    $query = "SELECT * FROM users WHERE login = '$log' AND
    password = '$pass'";
    $send_query = mysqli_query($link, $query);
    $user_array = mysqli_fetch_array($send_query);
    $login = $user_array['login'];
    $rights = $user_array['rights'];
    $user_id = $user_array['id'];
    $count = mysqli_num_rows($send_query);
    if ($count >0){
        session_start();
    $_SESSION['login'] = $login;
    $_SESSION['rights'] = $rights;
    $_SESSION['id'] = $user_id;
    header( "Location:index.php" );
    echo '<h3>Добро пожаловать '.$_SESSION['login'].'!'.'</h3><h3>Вы успешно авторизовались на сайте :></h3>';
    }else{
        echo "Извините, Вы не зарегистрированы.";
    }
}


if(($login) &&($password))
{
    authentication($login,$password);
}
if(($new_login) &&($new_password))
{
    $add_query = "INSERT INTO users (login,password,rights) VALUES ('$new_login', '$new_password','u')";
    mysqli_query($link, $add_query);
    authentication($new_login,$new_password);
}
?>