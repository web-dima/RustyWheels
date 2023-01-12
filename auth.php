<?php
    session_start();
    if ($_SESSION["auth"]) {
        header("Location: admin-panel.php");
    }
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>rusty wheels</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="iconstfont.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Заблудились? <a class="zabludilca" href="index.php">вернуться на главную</a></h1>

    <div class="auth">
        <div class="auth__wrapper">
            <h1>Войти</h1>
            <form class="car__form" action="auth-action.php" method="post">
                <label>ваш логин</label>
                <input type="email" class="car__form-input" name="login">
                <label>ваш пароль</label>
                <input type="password" class="car__form-input" name="password">
                <button class="car__form-btn">Войти</button>
            </form>
        </div>
    </div>

</body>

</html>