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
            <h1 class="blogItem__title">Крио-шоу</h1>
            <img class="blogItem__img" src="img/levitron-2.jpg" alt="blog item">
            <p  class="blogItem__desc">
                В настоящее время популярностью пользуются научные шоу для детей. Зачастую их организовывают на утренниках, днях рождения и других праздниках. Многие родители заказывают представителей научного шоу прямо к себе домой; однако чаще всего они выступают в детских садах или школах. Мастера своего дела готовы показать что-то химически-волшебное, загадочное, завораживающее.
                <br> <br>
                Что касается родителей, то научное шоу привлекает их внимание за счет наличия уникальных образовательных элементов. Дети начинают увлекаться наукой и стараются постичь больше знаний, чтобы понять, как все это устроено. В ходе выступления профессора Николя дети и родители смогут сами поучаствовать, попробовать сделать представление, станут настоящими магами и волшебниками.</p>
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