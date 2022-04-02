<?php
    $localhost = "localhost";
    $db = "portfolio_db";
    $user = "stanislav";
    $password = "ZDeBzyH)F!!FxB[7";
    $link = mysqli_connect($localhost, $user, $password);
    mysqli_query($link, "SET NAMES utf8;");
    mysqli_query($link, "SET CHARACTER SET utf8;");
    mysqli_select_db($link, $db);
?>