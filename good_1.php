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
            padding-top: 60px;
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
    </style>
    <!-- -->
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="assets/includes/js/slimbox/css/slimbox2.css" media="screen">
    <script type="text/javascript" src="assets/includes/js/slimbox/js/slimbox2.js"></script>

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
    height: 800px;
    margin: 0 auto; /* Значение отступов */
    padding: 10px; /* Поля вокруг текста */
    border: 4px solid white; /* Параметры границы */
   /* background: #fc0;  Цвет фона */

                ">

            <div id="qwer">
                <div>
                    <img src="assets/main_goods/1.png" width="400" height="550">
                    <br>
                    <div id="#qwer3">
                    <a href="assets/files/goods/winter/01/1.png" rel="lightbox-cats" title="Beautiful, isn't it?"><img src="assets/files/goods/winter/01/1.png" width="131" height="130"></a>
                    <a href="assets/files/goods/winter/01/2.png" rel="lightbox-cats" title="Beautiful, isn't it?"><img src="assets/files/goods/winter/01/2.png" width="131" height="130"></a>
                    <a href="assets/files/goods/winter/01/3.png" rel="lightbox-cats" title="Beautiful, isn't it?"><img src="assets/files/goods/winter/01/3.png" width="128" height="130"></a>


                    </div>
                </div>


            </div>
            <br>

            <?php
            require_once 'connect_db.php'; // подключаем скрипт

            $result = mysqli_query($db,"SELECT * FROM goods WHERE gooods_id='6'") or die("Нет соединения с БД " . mysqli_connect_error());
            $myrow = mysqli_fetch_array($result) or die("Нет соединения с БД 2 " . mysqli_connect_error());
            $rows = mysqli_num_rows($result); // количество полученных строк






            ?>
            <div id="qwer1">
                <h1><?php echo $myrow['name']; ?>
                <br>
                    <font size="3px">Цена: <?php echo $myrow['price']; ?></font>
                </h1>

                <p><?php echo $myrow['description']; ?></p>

                <form action="order_1.php">
                    <button class="btn btn-warning" type="submit">Оформити замовлення</button>
                </form>

            </div>
        <br>



        </div>
        <div class="clear"></div>


    </div>








    <!-- <a href="assets/main_goods/1.png" rel="lightbox" title="Beautiful, isn't it?"><img src="assets/main_goods/2.png" width="50" height="50"></a> -->
</body>

<footer>

</footer>
</html>