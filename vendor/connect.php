<?php
    $connect = mysqli_connect('localhost', 'root', '', 'mydatabase');

    if (!$connect) {
        die('Error connect to DataBase');
    }
?>
