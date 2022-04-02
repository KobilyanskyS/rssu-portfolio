<?php
    require_once("db.php")
?>
<?php
session_start();

$new_login = $_POST['new_login'];
$new_password = $_POST['new_password'];

$login = $_POST['login'];
$password = $_POST['password'];

function authentication($log, ){}


if(($login) &&($password))
{
    $query = "SELECT * FROM users WHERE login = '$login' AND
    password = '$password'";
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
if(($new_login) &&($new_password))
{
    $query = "INSERT INTO users (login,password,rights) VALUES ('$new_login', '$new_password','u')";
    mysqli_query($link, $query);
    $query = "SELECT * FROM users WHERE login = '$new_login' AND
    password = '$new_password'";
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
?>