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
            <h1 class="blogItem__title">Опыты для детей</h1>
            <img class="blogItem__img" src="img/levitron-3.jpg" alt="blog item">
            <p  class="blogItem__desc">
                После взросления многие признаются, что школьные уроки по химии, физике больше всего не любили. Негативное отношение к указанным предметам зачастую обусловлено сложными для понимания формулами, опытами, навевающими скуку. Однако каждого ребенка можно заинтересовать естественными науками, если заблаговременно его подготовить, организовав дома проведение опытов с детьми.
                <br>
                <br>
                Эксперименты от профессора Николя наглядно продемонстрируют действие законов физики, химии. Занятия не только увлекательные, но и понятные всем – даже тем, кто далек от научных исследований.
            </p>
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