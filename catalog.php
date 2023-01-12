<? session_start();?>
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

    <header class="header">
        <div class="container">
            <div class="header__inner">
                <div class="logo">
                    <img src="img/logo.png" alt="">
                </div>
                <div class="adress__info">
                    <div class="adrees"><i class="fas fa-map-marker-alt"></i>Челябинск, ул. Пионерская, 6</div>
                    <div class="opening__hours"><i class="fas fa-clock"></i> Круглосуточно</div>
                </div>
                <div class="contact__info">
                    <div class="phone"><i class="fa fa-phone" aria-hidden="true"></i>+7 (909) 073-26-04</div>
                    <a class="back__call" href="tel:+79090732604">Обратный звонок</a>
                </div>
            </div>
        </div>
    </header>

    <nav class="nav">
        <div class="container">
            <ul class="nav__list">
                <li><a href="index.php">Главная</a></li>
                <li><a href="catalog.php">Каталог</a></li>
                <li><a href="review-page.php">Оставить отзыв</a></li>
                <?php
                if ($_SESSION["auth"]) {
                    ?>
                    <li><a href="admin-panel.php">панель управления</a></li>
                    <li><a href="logout.php">выйти</a></li>
                <?}
                else {?>
                   <li><a href="auth.php">авторизоваться</a></li>
                <?}
                ?>
            </ul>
            <i class="fas fa-bars burger"></i>
        </div>
    </nav>

    <div class="choose">Наши автомобили</div>

    <section class="catalog">
        <div class="container">
            <div class="catalog__items">
                <?php 
                    include_once "bdconnect.php";
                    $result = mysqli_query($link,"SELECT * FROM cars");
                    while ($row = mysqli_fetch_array($result)) {
                      ?>
                        <div class="catalog__item">
                            <div class="catalog__item-img"><img src="img/<? echo $row["img"]?>" alt=""></div>
                            <div class="catalog__item-title"><?echo($row["brand"]." - ".$row["model"]) ?></div>
                            <div class="catalog__item-price"><?echo($row["price"]. "руб");?> </div>
                            <a class="details__btn" href="car.php?id=<? echo $row["id"] ?>">подробнее <i class="fas fa-chevron-right"></i></a>
                        </div>
                        <?php
                    }
                ?>
                

                <!-- <div class="catalog__item">
                    <div class="catalog__item-img"><img src="img/bmv34.jpg" alt=""></div>
                    <div class="catalog__item-title">Скотина</div>
                    <div class="catalog__item-price">100p</div>
                    <a class="details__btn" href="car.php">подробнее <i class="fas fa-chevron-right"></i></a>
                </div> -->

            </div>
        </div>
    </section>


    <footer class="footer">
        <div class="container">
            <div class="footer__inner">
                <div class="footer__content">
                    <div class="logo">
                        <img src="img/logo.png" alt="">
                    </div>
                    <ul class="footer__menu">
                        <li><a href="index.php">Главная</a></li>
                        <li><a href="catalog.php">Каталог</a></li>
                        <li><a href="review-page.php">Оставить отзыв</a></li>
                    </ul>
                    <div class="footer__contact">
                        <div class="opening__hours"><i class="fas fa-clock"></i> Круглосуточно</div>
                        <div class="adrees"><i class="fas fa-map-marker-alt"></i>Челябинск, ул. Пионерская, 6</div>
                    </div>
                </div>
            </div>
            <div class="copyright">made by ryzhiy</div>
        </div>
        </div>

    </footer>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script>
        $(document).ready(function () {

            $(".slider").slick({
                dots: true
            });
            $(".burger").click(() => {
                $(".nav__list").toggleClass("show")
            })

        });
    </script>
</body>

</html>