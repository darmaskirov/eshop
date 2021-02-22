<?php
require_once 'connect_db.php'; // подключаем скрипт

// подключаемся к серверу
$link = mysqli_connect($host, $user, $password, $database)
    or die("Ошибка " . mysqli_error($link));

// закрываем подключение
mysqli_close($link);
?>