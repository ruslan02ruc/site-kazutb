<?php
    session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Научное шоу</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php 
        include ('./header.php');
    ?>
    <main class="index">

        
        <div style="position: relative">
            <img class="index__img" src="img/index-1.jpg" alt="">
            <a class="index__video" href="#openModal"><span></span></a>
        </div>
        <div class="index__foto">
            <img src="img/index-2.jpg" alt="">
            <img src="img/index-3.jpg" alt="">
            <img src="img/index-4.jpg" alt="">
            <form>
                <div class="index__email">
                    <h4>Узнайте первым о новых шоу, акциях и скидках:</h4>
                    <input class="index__email-inp" type="email" placeholder="Email">
                    <input name="index__email-btn" class="index__email-btn" type="button" value="Подписаться">
                </div>
            </form>
        </div>
        <div class="blog">
            <h1 class="blog__title">Интересные статьи</h1>
            <div class="blog__container">
                <a href="blog-item-1.php">
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
                <a href="blog-item-2.php">
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
                <a href="blog-item-3.php">
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

    <div id="openModal" class="modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <a href="#close" title="Close" class="close">×</a>
                </div>
                <div class="modal-body">
                    <iframe width="956" height="538" src="https://www.youtube-nocookie.com/embed/VD2i-kgnrpI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function(){
            var scrollbar = document.body.clientWidth - window.innerWidth + 'px';
            console.log(scrollbar);
            document.querySelector('[href="#openModal"]').addEventListener('click',function(){
                document.body.style.overflow = 'hidden';
                document.querySelector('#openModal').style.marginLeft = scrollbar;
            });
            document.querySelector('[href="#close"]').addEventListener('click',function(){
                document.body.style.overflow = 'visible';
                document.querySelector('#openModal').style.marginLeft = '0px';
            });
        });
    </script>
        
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>