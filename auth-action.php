<?php
session_start();
    include_once "bdconnect.php";
    $login = $_POST["login"];
    $password = $_POST["password"];
    $auth_req = mysqli_query($link, "SELECT * FROM `users` WHERE login = '$login' AND password = '$password'");
    if (mysqli_num_rows($auth_req) > 0) {
        $_SESSION["auth"] = true;
        header("Location: index.php");
    }
    else {
        header("Location: auth.php");
    }
?>