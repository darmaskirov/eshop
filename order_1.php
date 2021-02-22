<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Інтернет-Магазин одягу</title>
    <!-- <link rel = "icon" href ="../files/icons/clothes.png" type = "image/x-icon"> -->
    <link rel="icon" href="assets/files/icons/clothes.png" type="image/icon type">
    <link rel="stylesheet" href="assets/styles/css/indexstyle.css">

    <link href="assets/styles/css/bootstrap.min.css" rel="stylesheet">

    <link href='http://fonts.googleapis.com/css?family=Roboto:400,500&subset=cyrillic-ext,latin' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700&subset=cyrillic-ext,latin' rel='stylesheet' type='text/css'>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]-->
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

    <style>

        img { float: left; padding: 1px; }

        #qwer
        {
            padding: 5px; /* Поля вокруг текста */
            float: left; /* Обтекание по правому краю */
            width: 400px; /* Ширина слоя */
        }

        #qwer1
        {
            padding-left: 25px;
            padding-right: 10px;

            padding-bottom: 5px;
            width: 350px; /* Ширина слоя */
            float: right; /* Обтекание по правому краю */
            margin-top: -100%;
        }


        #qwer3
        {
            margin-top: 10px;
        }

        #clear
        {
            clear: left; /* Отмена обтекания */
        }
        html,
        body {
            height: 100%;
        }
        body {
            background: #e6e6e6;
            font-family: 'Source Sans Pro', sans-serif;
        }
        .container {
            width: 100%;
            height: 100%;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
        }
        h1 {
            font-family: 'Alegreya Sans', sans-serif;
            font-weight: 300;
            margin-top: 0;
        }
        .control-group {
            display: inline-block;
            vertical-align: top;
            background: #fff;
            text-align: left;
            box-shadow: 0 1px 2px rgba(0,0,0,0.1);
            padding: 30px;
            width: 200px;
            height: 210px;
            margin: 10px;
        }
        .control {
            display: block;
            position: relative;
            padding-left: 30px;
            margin-bottom: 15px;
            cursor: pointer;
            font-size: 18px;
        }
        .control input {
            position: absolute;
            z-index: -1;
            opacity: 0;
        }
        .control__indicator {
            position: absolute;
            top: 2px;
            left: 0;
            height: 20px;
            width: 20px;
            background: #e6e6e6;
        }
        .control--radio .control__indicator {
            border-radius: 50%;
        }
        .control:hover input ~ .control__indicator,
        .control input:focus ~ .control__indicator {
            background: #ccc;
        }
        .control input:checked ~ .control__indicator {
            background: #2aa1c0;
        }
        .control:hover input:not([disabled]):checked ~ .control__indicator,
        .control input:checked:focus ~ .control__indicator {
            background: #0e647d;
        }
        .control input:disabled ~ .control__indicator {
            background: #e6e6e6;
            opacity: 0.6;
            pointer-events: none;
        }
        .control__indicator:after {
            content: '';
            position: absolute;
            display: none;
        }
        .control input:checked ~ .control__indicator:after {
            display: block;
        }
        .control--checkbox .control__indicator:after {
            left: 8px;
            top: 4px;
            width: 3px;
            height: 8px;
            border: solid #fff;
            border-width: 0 2px 2px 0;
            transform: rotate(45deg);
        }
        .control--checkbox input:disabled ~ .control__indicator:after {
            border-color: #7b7b7b;
        }
        .control--radio .control__indicator:after {
            left: 7px;
            top: 7px;
            height: 6px;
            width: 6px;
            border-radius: 50%;
            background: #fff;
        }
        .control--radio input:disabled ~ .control__indicator:after {
            background: #7b7b7b;
        }
        .select {
            position: relative;
            display: inline-block;
            margin-bottom: 15px;
            width: 100%;
        }
        .select select {
            display: inline-block;
            width: 100%;
            cursor: pointer;
            padding: 10px 15px;
            outline: 0;
            border: 0;
            border-radius: 0;
            background: #e6e6e6;
            color: #7b7b7b;
            appearance: none;
            -webkit-appearance: none;
            -moz-appearance: none;
        }
        .select select::-ms-expand {
            display: none;
        }
        .select select:hover,
        .select select:focus {
            color: #000;
            background: #ccc;
        }
        .select select:disabled {
            opacity: 0.5;
            pointer-events: none;
        }
        .select__arrow {
            position: absolute;
            top: 16px;
            right: 15px;
            width: 0;
            height: 0;
            pointer-events: none;
            border-style: solid;
            border-width: 8px 5px 0 5px;
            border-color: #7b7b7b transparent transparent transparent;
        }
        .select select:hover ~ .select__arrow,
        .select select:focus ~ .select__arrow {
            border-top-color: #000;
        }
        .select select:disabled ~ .select__arrow {
            border-top-color: #ccc;
        }

    </style>
    <!-- -->
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="assets/includes/js/slimbox/css/slimbox2.css" media="screen">
    <script type="text/javascript" src="assets/includes/js/slimbox/js/slimbox2.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Alegreya+Sans:300,400|Source+Sans+Pro:400,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <!-- -->
    <ul class="menu-main">
        <li><a href="index.php" class="current">Головна</a></li>
        <li><a href="contacts.html">Контакти</a></li>
        <li><a href="delivery.html">Доставка</a></li>
        <li><a href="about_us.html">Про нас</a></li>
        <li><a href="rewiews.html">Відгуки</a></li>
    </ul>

</head>



<body>
<br>


<div style="
    width: 770px; /* Ширина слоя */
    height: 100%;
    margin: 0 auto; /* Значение отступов */
    padding: 10px; /* Поля вокруг текста */
    border: 4px solid white; /* Параметры границы */
   /* background: #fc0;  Цвет фона */

                ">




<?php


if(isset($_POST['name']) && isset($_POST['surname']) && isset($_POST['phone']) && isset($_POST['adress']) && isset($_POST['good_id']) && isset($_POST['optionsRadios'])){
    $host = 'localhost';
        $user = 'root';
        $password = 'root';
        $database = 'eshop';
    // подключаемся к серверу
    $link = mysqli_connect($host, $user, $password, $database)
        or die("Ошибка " . mysqli_error($link));

    // экранирования символов для mysql
    $name = htmlentities(mysqli_real_escape_string($link, $_POST['name']));
    $surname = htmlentities(mysqli_real_escape_string($link, $_POST['surname']));
    $phone = htmlentities(mysqli_real_escape_string($link, $_POST['phone']));
    $adress = htmlentities(mysqli_real_escape_string($link, $_POST['adress']));
    $good_id = 6;
    $radio = htmlentities(mysqli_real_escape_string($link, $_POST['optionsRadios']));
    // создание строки запроса
    $query ="INSERT INTO orders VALUES(NULL, '$name','$surname','$phone','$adress','$good_id','$radio')";


    // выполняем запрос
    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
    if($result)
    {
       echo "<center><span style='color:blue;'>Заказ оформлен</span></center>";
    }
    // закрываем подключение
    mysqli_close($link);
}
?>
        <?php
        require_once 'connect_db.php'; // подключаем скрипт

        $result = mysqli_query($db,"SELECT * FROM goods WHERE gooods_id='6'") or die("Нет соединения с БД " . mysqli_connect_error());
        $myrow = mysqli_fetch_array($result) or die("Нет соединения с БД 2 " . mysqli_connect_error());
        $rows = mysqli_num_rows($result); // количество полученных строк



        ?>
        <center>

        <h3>Ви замовляєте: <?php echo $myrow['name']; ?></h3>
        <h3>Ціна: <?php echo $myrow['price']; ?></h3>
        </center>
       <form method="POST">
               <div class="page">
                   <label class="field field_v1">
                       <input class="field__input" placeholder="e.g. Stanislav"  name="name">
                       <span class="field__label-wrap">
             <span class="field__label">Ваше ім'я</span>
           </span>
                   </label>
                   <label class="field field_v2">
                       <input class="field__input" placeholder="e.g. Melnikov"  name="surname">
                       <span class="field__label-wrap">
             <span class="field__label">Прізвище</span>
           </span>
                   </label>
                   <label class="field field_v3">
                       <input class="field__input" placeholder="e.g. melnik909@ya.ru" name="phone">
                       <span class="field__label-wrap">
             <span class="field__label">Електрона пошта</span>
           </span>
                   </label>

                   <label class="field field_v4">
                       <input class="field__input" placeholder="+380" name="adress">
                       <span class="field__label-wrap">
             <span class="field__label">Номер телефону</span>
           </span>
                   </label>

                   <label class="field field_v5">
                       <input class="field__input" placeholder="адреса" name="good_id">
                       <span class="field__label-wrap">
             <span class="field__label">Адреса відділення нової пошти</span>
           </span>
                   </label>
                    <div>
                                               <h1>Варіант доставки</h1>
                                               <label class="control control--radio" name="optionsRadios">Накладений платіж, перевірка у відділені
                                                   <input type="radio" name="optionsRadios" value="перевірка у відділені"/>
                                                   <div class="control__indicator"></div>
                                               </label>
                                               <label class="control control--radio" name="optionsRadios">Накладений платіж, Доставка кур'єром на дім та перевірка товару
                                                   <input type="radio" name="optionsRadios" value="Доставка кур'єром "/>
                                                   <div class="control__indicator"></div>
                                               </label>
                                           </div>
               </div>
               <input class="btn btn-warning" type="submit">
           </form>


    <br>



    </div>

<div class="container">
    <!--<div class="control-group">
        <h1>Checkboxes</h1>
        <label class="control control--checkbox">First checkbox
            <input type="checkbox" checked="checked"/>
            <div class="control__indicator"></div>
        </label>
        <label class="control control--checkbox">Second checkbox
            <input type="checkbox"/>
            <div class="control__indicator"></div>
        </label>
        <label class="control control--checkbox">Disabled
            <input type="checkbox" disabled="disabled"/>
            <div class="control__indicator"></div>
        </label>
        <label class="control control--checkbox">Disabled & checked
            <input type="checkbox" disabled="disabled" checked="checked"/>
            <div class="control__indicator"></div>
        </label>
    </div>-->

   <!--<div class="control-group">
        <h1>Select boxes</h1>
        <div class="select">
            <select>
                <option>First select</option>
                <option>Option</option>
                <option>Option</option>
            </select>
            <div class="select__arrow"></div>
        </div>
        <div class="select">
            <select>
                <option>Second select</option>
                <option>Option</option>
                <option>Option</option>
            </select>
            <div class="select__arrow"></div>
        </div>
        <div class="select">
            <select disabled="disabled">
                <option>Disabled</option>
                <option>Option</option>
                <option>Option</option>
            </select>
            <div class="select__arrow"></div>
        </div>
    </div>-->
</div>



</div>
<div class="clear"></div>


</div>








<!-- <a href="assets/main_goods/1.png" rel="lightbox" title="Beautiful, isn't it?"><img src="assets/main_goods/2.png" width="50" height="50"></a> -->
</body>

<footer>

</footer>
</html>