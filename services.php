<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Наши услуги</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php 
        include ('./header.php');
    ?>
    <main class="services">
        <h1 class="services__title">Наши услуги</h1>
        <div class="services__container">
            <div class="services__item">
                <a href="/servic-item-1.php">
                    <img class="services__item-img" src="img/services-1.jpg" alt="">
                    <div class="services__item-info">
                        <h3 class="services__item-title">Научное шоу для взрослых</h3>
                        <p>18-40лет</p>
                        <p>10 эксп.</p>
                        <p>от 1 часа</p>
                        <p>от 30 000 тенге</p>
                    </div>
                </a>
            </div>
            <div class="services__item">
                <a href="/servic-item-2.php">
                    <img class="services__item-img" src="img/services-2.jpg" alt="">
                    <div class="services__item-info">
                        <h3 class="services__item-title">Шоу с жидким азотом для детей</h3>
                        <p>7-15лет</p>
                        <p>12 эксп.</p>
                        <p>от 1 часа</p>
                        <p>от 20 000 тенге</p>
                    </div>
                </a>
            </div>
            <div class="services__item">
                <a href="/servic-item-3.php">
                    <img class="services__item-img" src="img/services-3.jpg" alt="">
                    <div class="services__item-info">
                        <h3 class="services__item-title">Концертное шоу для взрослых</h3>
                        <p>18-40лет</p>
                        <p>10 эксп.</p>
                        <p>от 1 часа</p>
                        <p>от 30 000 тенге</p>
                    </div>
                </a>
            </div>
        </div>
    </main>
    <footer>
        <div class="footer__copywriting">
            <p>© Научное шоу, 2023</p>
            <p>Все права защищены. Копирование, перепечатка, размещение и публикация материалов сайта без упоминания первоисточника запрещена!</p>
        </div>
        <div class="footer__contacts">
            <h3>Контакты</h3>
            <p>+7(778)981-0898</p>
            <h3>Адрес</h3>
            <p>+Туран 55</p>
        </div>
    </footer>
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>