<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>О нас</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php 
        include ('./header.php');
    ?>
    <main class="about">
        <h1 class="about__title">Спасибо что интересуетесь нами!</h1>
        <iframe class="about__video" width="640" height="360" src="https://www.youtube-nocookie.com/embed/15oPPMMOx80" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        <p>
            <b>«Научное шоу профессора Звездунова»</b>  – это первая в Астане компания полного цикла по организации познавательно-развлекательных шоу-программ, научных мастер-классов и  интерактивных зон для детей и взрослых на мероприятиях любого формата и уровня. Являясь частью международной команды профессионалов в области проведения Event-событий в научном стиле, работающих под брендом «Научное шоу профессора Звездунова», мы работаем только по авторским сценариям, имеем базу из <b>более чем 100 уникальных экспериментов</b> и научных мастер-классов, а так же собственную школу ведущих научных шоу.
            <br><br>
            Научное шоу профессора Звездунова станет ярким и незабываемым моментом любого детского и взрослого праздника (Новый год, День рождения, корпоративный праздник, выпускной в школе и детском саду, свадебное торжество, оригинальное поздравление, клубная вечеринка и т.д.)
            <br><br>
            Научное шоу можно проводить в любых помещениях: <b>детские сады, школы, торговые центры, кафе и даже у Вас дома.</b> Научная лаборатория абсолютно мобильна.
            <br>
            Участие в шоу <b>абсолютно безопасно</b>, вся продукция сертифицирована и безвредна.       
        </p>
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