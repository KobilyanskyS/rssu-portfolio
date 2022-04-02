<?php require_once ("db.php"); ?>
<?php
    session_start();
    echo "<h1>Добро пожаловать, ".$_SESSION['login']."!</h1>";
?>
<p>Пользователи</p>
<?php
    $query = "SELECT login FROM users ORDER BY id DESC";
    $select_users = mysqli_query($link, $query);
    while ($user = mysqli_fetch_array($select_users))
    {
    ?> 
    <?php 
        echo $user ['login'], "<br>";
        }
    ?>
<div><a href="logout.php">ВЫЙТИ</a></div>
