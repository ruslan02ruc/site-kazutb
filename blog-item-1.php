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
    <main class="blogItem">
        <div class="blogItem__container">
            <h1 class="blogItem__title">Химические опыты для детей</h1>
            <img class="blogItem__img" src="img/levitron-1.jpg" alt="blog item">
            <p  class="blogItem__desc">Время отдыха детей всем родителям хочется организовать увлекательно, интересно и с пользой. Заботливые мамы и папы беспокоятся о детях и стремятся их развивать с ранних лет. Удивить современных ребят непросто. Их важно заинтересовать, пробудить желание познавать что-то новое. Любое свободное время необходимо тщательно организовывать, чтобы детишки не просто веселились, но и получали новые необходимые знания. Так получится выявить интересы, помочь каждому ребенку найти свое призвание в будущем. Детство – это замечательная пора, когда пытливый юный мозг способен воспринимать много новой информации. Поэтому нельзя упускать такой момент.</p>
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