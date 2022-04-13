<?php 
    require_once ("db.php"); 
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Портфолио студента</title>
    <link rel="stylesheet" href="/css/reset.css">
    <link rel="stylesheet" href="/css/index.css">
    <script src="/js/jquery.js"></script>
    <script src="/js/main.js"></script>
</head>
<body>
    <header class="header">
        <div class="wrapper">
            <div class="header_items">
                <a class="logo_link" href="#">
                    <img src="/photos/logo.png" alt="">
                </a>
                <h1 class= "portfolio__header">Портфолио студента</h1>
                <div class="user_info">
                    <a href="">
                        <img src="/photos/default-user-image.png" class="avatar" alt="avatar">
                    </a>
                    <div class="navbar__inner_item username"><?echo $_SESSION['login']?></div>
                    <div class="dropdown-content">
                        <a href="" class="dropdown-link avatar2">
                            <img src="/photos/default-user-image.png" class="avatar3" alt="avatar">
                            <div class="dropdown-block"><?echo $_SESSION['login']?></div>
                        </a>
                        <a href="#" class="dropdown-link"><div class="dropdown-block">Редактировать профиль</div></a>
                        <a href="#" class="dropdown-link"><div class="dropdown-block">Ссылка</div></a>
                        <a href="#" class="dropdown-link"><div class="dropdown-block">Ссылка</div></a>
                        <a href="logout.php" class="dropdown-link"><div class="dropdown-block">Выйти</div></a>
                    </div>
                </div>
                <div class="navbar__burger">
                    <span></span>
                </div>
            </div>
        </div>
    </header>
    <div class="main">
        <div class="wrapper">
            <div class="profiles">
            <?php
                $query = "SELECT login FROM users ORDER BY id DESC";
                $select_users = mysqli_query($link, $query);
                while ($user = mysqli_fetch_array($select_users))
                {
                ?> 
                <div class="profile__card">
                    <div class="profile__info">
                        <img class="profile__img" src="/photos/default-user-image.png" alt="">
                        <div class="profile__description">
                            <p class="profile__description__name"><? echo $user ['login']; ?></p>
                            <p class="profile__description__age">21</p>
                            <p class="profile__description__course">4</p>
                        </div>
                    </div>
                    <div class="profile__education__info">
                        <p class="profile__education__info__spec">Информационные системы (по отраслям)</p>
                    </div>
                </div>
                <?php 
            }
        ?>
            </div>
        </div>
    </div>
</body>
</html>