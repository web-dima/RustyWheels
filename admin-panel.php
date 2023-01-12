<?php
    session_start();
    if (!$_SESSION["auth"]) {
        header("Location: auth.php");
    }
    else {
        
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>админка</title>
    <link rel="stylesheet" href="admin-panel.css">
</head>

<body>
    <h1 style="display:flex; justify-content: space-between"><a href="index.php">вернуться на главную</a> <a href="logout.php">выйти с аккаунта</a></h1>
    <section class="amdin__panel">
        <div class="container">
            <h1 class="section__title first">Добавить машину</h1>
            <form action="add-car.php" method="post" enctype="multipart/form-data">
                <label>марка</label>
                <input type="text" name="brand">

                <label>модель</label>
                <input type="text" name="model">

                <label>мощность</label>
                <input type="number" name="hp">

                <label>трансмисия</label>
                <select name="transmission">
                    <option value="механическая">механическая</option>
                    <option value="автоматическая">автоматическая</option>
                </select>

                <label>кузов</label>
                <select name="body">
                    <option value="седан">седан</option>
                    <option value="хэтчбек">хэтчбек</option>
                    <option value="универсал">универсал</option>
                    <option value="кроссовер">кроссовер</option>
                </select>

                <label>цена</label>
                <input type="number" name="price">

                <label>цвет</label>
                <input type="text" name="color">

                <label>картинка</label>
                <input type="file" name="img">

                <button>Добавить</button>
            </form>

            <h1 class="section__title">удалить машину</h1>
            <form action="remove-car.php" method="post">
                <label>выберите ту машину которую хотите удалить</label>
                <select name="remove">
                    <?php 
                    include_once "bdconnect.php";
                    $result = mysqli_query($link,"SELECT * FROM cars");
                    while ($row = mysqli_fetch_array($result)) {

                      ?>
                        <option value="<?=$row["id"]."/" . $row["img"]?>"><?echo($row["brand"]." - ".$row["model"]) ?></option>
                        <?php
                    }
                ?>
                </select>

                <button>удалить</button>
            </form>
        </div>
    </section>

</body>

</html>