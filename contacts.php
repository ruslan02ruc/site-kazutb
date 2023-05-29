<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Контакты</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php 
        include ('./header.php');
    ?>
    <main class="contacts">
        <h1 class="contacts__title">Контакты</h1>
        <div class="contacts__container">
            <div class="contacts__item-1">
                <h2>КОНТАКТНАЯ ИНФОРМАЦИЯ</h2>
                <p> Вы можете связаться с нами любым способом, который удобен для вас. 
                    Вы также можете использовать форму быстрого контакта справа или посетить наш офис лично. 
                    Пишите нам с любыми вопросами и запросами или использовать наши контактные данные. 
                    Мы будем рады ответить на ваши вопросы.</p>
            </div>

            <div class="contacts__item-2">
                <div class="contacts__info">
                    <div class="contacts__phone">
                        <p>Звоните</p>
                        <p><span>+7(778)981-0898</span></p>
                        <p>Адрес</p>
                        <p><span>Туран 55</span></p>
                    </div>
                    <div class="contacts__email">
                        <p>Пишите</p>
                        <p><span>info@info.ru</span></p>
                    </div>
                </div>
                <hr>
                <div class="contacts__question">
                    <h2 class="contacts-question__title">Задать вопрос</h2>
                    <form action="/vendor/questionAdd.php" method="post" id="myForm" class="contacts__form">
                        <input id="name" name="name" type="text" placeholder="Ваше имя" required>
                        <input id="tel" name="telephone" type="tel" placeholder="Ваш телефон" required>
                        <input id="tema" name="tema" type="text" placeholder="Тема" required>
                        <input id="question" name="question" type="text" placeholder="Вопрос" required>
                        <?php
                            if ($_SESSION['user']==TRUE){?>
                            <button type="submit" class="questionAdd-btn">Отправить</button>
                        <?php
                            }elseif($_SESSION['user']==FALSE){
                        ?>
                            <h4 style='margin-top: 15px'>Для отправки зарегистрируйтесь</h4>
                        <?php
                            }
                        ?>
                    </form>
                    <p class="msg none">Lorem ipsum dolor sit amet.</p>
                </div>
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