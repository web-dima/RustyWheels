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

    <section class="send-review">
        <div class="container">
            <h1 class="lenb">Коротко про нашу компанию</h1>
            <p>Наш автосалон предоставляет широкий спектор выбора автомобилей, в нашем автосалоне можно купить
                автомоибли которые уже давно не производятся, в этом и уникальносить нашего автосалона, так же мы не
                завышаем ценны на машины, все справедливо и в рамках разумного. Наш автосалон был основан в 2012 году,
                когда все модели ваз серии 21 сняли с конвеера, в тот момент мы подумали, что хорошие же были машины,
                жалко теперь людям будет сложнее купить их и нас осенило после чего и появился данный автосалон с
                широким выбором различных автомобилей и не только классических вазов. Пожалуйста оставтье отзыв, для нас
                это невероятно важно, для вас это пару секунд а нам это позволяет становиться известнее и постепенно
                расширять наш ассортимент</p>
            <h1 class="poxui">напишите озыв о нас</h1>
            <div class="form__wrapper">
                <form class="car__form" action="review-action.php" method="POST">
                    <label>ваше имя</label>
                    <input type="text" class="car__form-input" name="review-name">
                    <label>ваш отзыв</label>
                    <textarea type="text" class="car__form-input" name="review-text"></textarea>
                    <button class="car__form-btn">Отправить</button>
                </form>
            </div>
        </div>
    </section>




    <footer class="footer kostyl">
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