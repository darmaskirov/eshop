<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Інтернет-Магазин одягу</title>
    <!-- <link rel = "icon" href ="../files/icons/clothes.png" type = "image/x-icon"> -->
    <link rel="icon" href="assets/files/icons/clothes.png" type="image/icon type">
    <link rel="stylesheet" href="assets/styles/css/indexstyle.css">

    <style>

    </style>
    <ul class="menu-main">
        <li><a href="index.php" class="current">Головна</a></li>
        <li><a href="contacts.html">Контакти</a></li>
        <li><a href="delivery.html">Доставка</a></li>
        <li><a href="about_us.html">Про нас</a></li>
        <li><a href="rewiews.html">Відгуки</a></li>
    </ul>


</head>



<body>
<div class="container_slider_css">
    <img class="photo_slider_css" src="assets/files/images/slideshow/slide1.png" alt="">
    <img class="photo_slider_css" src="assets/files/images/slideshow/slide2.png" alt="">
    <img class="photo_slider_css" src="assets/files/images/slideshow/slide3.png" alt="">
    <img class="photo_slider_css" src="assets/files/images/slideshow/slide3.png" alt="">
</div>>
<a class="slider__control slider__control_left" href="#" role="button"></a>
<a class="slider__control slider__control_right slider__control_show" href="#" role="button"></a>
</div>
<center>

<?php
require_once 'connect_db.php'; // подключаем скрипт

$result = mysqli_query($db,"SELECT * FROM goods WHERE gooods_id='6'") or die("Нет соединения с БД " . mysqli_connect_error());
$myrow = mysqli_fetch_array($result) or die("Нет соединения с БД 2 " . mysqli_connect_error());
$rows = mysqli_num_rows($result); // количество полученных строк



?>
<div class="product-item">
    <div class="product-list">
        <img src="assets/main_goods/1.png" width="800" height="600">
        <h3><?php echo $myrow['name']; ?></h3>
        <span class="price">₴ <?php echo $myrow['price']; ?></span>
        <a href="good_1.php" class="button">В корзину</a>
    </div>


</div>
<?php
require_once 'connect_db.php'; // подключаем скрипт

$result = mysqli_query($db,"SELECT * FROM goods WHERE gooods_id='7'") or die("Нет соединения с БД " . mysqli_connect_error());
$myrow = mysqli_fetch_array($result) or die("Нет соединения с БД 2 " . mysqli_connect_error());
$rows = mysqli_num_rows($result); // количество полученных строк



?>
<div class="product-item">
    <div class="product-list">
        <img src="assets/main_goods/2.png" width="800" height="600">
        <h3><?php echo $myrow['name']; ?></h3>
        <span class="price">₴ <?php echo $myrow['price']; ?></span>
        <a href="good_2.php" class="button">В корзину</a>
    </div>

<?php
require_once 'connect_db.php'; // подключаем скрипт

$result = mysqli_query($db,"SELECT * FROM goods WHERE gooods_id='8'") or die("Нет соединения с БД " . mysqli_connect_error());
$myrow = mysqli_fetch_array($result) or die("Нет соединения с БД 2 " . mysqli_connect_error());
$rows = mysqli_num_rows($result); // количество полученных строк



?>
</div>
<div class="product-item">
    <div class="product-list">
        <img src="assets/main_goods/3.png" width="800" height="600">
        <h3><?php echo $myrow['name']; ?></h3>
        <span class="price">₴ <?php echo $myrow['price']; ?></span>
        <a href="good_3.php" class="button">В корзину</a>
    </div>
    </center>


</body>

<footer>

</footer>
</html>