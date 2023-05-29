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
    <main class="servicItem">
        <div class="servicItem__container">
            <h1 class="servicItem__title">Научное шоу для взрослых</h1>
            <img class="servicItem__img" src="img/services-1.jpg" alt="blog item">
            <p  class="servicItem__desc">
                Научное шоу интересно не только детям, но и взрослым!<br>
                "Шоу профессора Николя" уже много лет можно увидеть на самых разных событиях для взрослой аудитории, и вот только некоторые из них:<br>

                - привлечение внимания посетителей к стенду на выставке;<br>
                - демонстрация экспериментов во время дня открытых дверей;<br>
                - научное шоу на взрослых корпоративах;<br>
                - химическое свадебное шоу "Химия любви";<br>
                - мастер-класс для преподавателей;<br>
            </p>
            <div>
                <h3 class="servicItem__order"> Заказ квеста</h3>
                <p class="servicItem__order-desc"> Заказать квест в Астане можно по телефону, указанному на сайте. 
                    Мы поможем выбрать максимально удобное время для организации незабываемого детского праздника. 
                </p>
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