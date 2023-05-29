<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Блог</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php 
        include ('./header.php');
    ?>
    <main class="blog">
        <h1 class="blog__title">Интересные статьи</h1>
        <div class="blog__container">
            <a href="/blog-item-1.php">
                <div class="blog__item">
                    <img class="blog__item-img" src="img/levitron-1.jpg" alt="">
                    <h3 class="blog__item-title">Химические опыты для детей</h3>
                    <p class="blog__item-desc">Химические опыты для детей – интересные опыты по химии, которые можно сделать дома </p>
                    <div class="blog__item-info">
                        <p>1393 просмотра</p>
                        <p>6 апреля 2023 </p>
                    </div>
                </div>
            </a>
            <a href="/blog-item-2.php">
                <div class="blog__item">
                    <img class="blog__item-img" src="img/levitron-2.jpg" alt="">
                    <h3 class="blog__item-title">Крио-шоу</h3>
                    <p class="blog__item-desc">Шоу с жидким азотом и вкусным мороженым? Да!!!</p>
                    <div class="blog__item-info">
                        <p>1393 просмотра</p>
                        <p>6 апреля 2023 </p>
                    </div>
                </div>
            </a>
            <a href="/blog-item-3.php">
                <div class="blog__item">
                    <img class="blog__item-img" src="img/levitron-3.jpg" alt="">
                    <h3 class="blog__item-title">Опыты для детей</h3>
                    <p class="blog__item-desc">Интересные опыты для детей, которые можно провести дома</p>
                    <div class="blog__item-info">
                        <p>1393 просмотра</p>
                        <p>6 апреля 2023 </p>
                    </div>
                </div>
            </a>
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