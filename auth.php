<?php
    session_start();
    if ($_SESSION['user']) {
        header('Location: index.php');
    }
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Авторизация</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
<header class="header">
    <a href="/index.php"><img class="header__logo" src="img/logo2.png" alt=""></a>
    <ul class="header__menu">
        <li><a <?php if ($url == "/index.php") {echo 'class="header__menu-active"';}?>href="/index.php">Главная</a></li>
        <li><a <?php if ($url == "/services.php") {echo 'class="header__menu-active"';}?> href="/services.php">Наши услуги</a></li>
        <li><a <?php if ($url == "/blog.php") {echo 'class="header__menu-active"';}?> href="/blog.php">Блог</a></li>
        <li><a <?php if ($url == "/about.php") {echo 'class="header__menu-active"';}?> href="/about.php">О нас</a></li>
        <li><a <?php if ($url == "/contacts.php") {echo 'class="header__menu-active"';}?> href="/contacts.php">Контакты</a></li>
        <?php
            if ($_SESSION['user']==TRUE){?>
            <p><b class="login" ><?= $_SESSION['user']['login']?></b><a href="vendor/logout.php" class="logout"style="margin: 0 34px 0 5px; font-size: 14px;"  style="border:2px solid; padding: 3px 32px;">Выход</a></p>
        <?php
            }elseif($_SESSION['user']==FALSE){
        ?>
            <a href="/auth.php" class="login-user"  style="border:2px solid; padding: 3px 32px;">Вход</a>
            <!-- <button type="button"  class="login-user" onclick="window.myDialog.showModal();">Вход</button> -->
        <?php
            }
        ?>
    </ul>
</header>
    <main>
        <!-- Форма авторизации -->
        <div class="menu">
            <h1>Авторизация</h1>
            <form>
                <input type="text" name="login" placeholder="Введите свой логин">
                <input type="password" name="password" placeholder="Введите пароль">
                <button type="submit" class="login-btn">Войти</button>
                <h4 class="menu-register-link"><a href="/register.php">Нет аккаунта?</a></р>
            </form>
        </div>
        <p class="msg none">Lorem ipsum dolor sit amet.</p>
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
