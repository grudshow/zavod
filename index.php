<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Компания</title>

    <!-- Styles -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/reset.css">


    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,900&display=swap&subset=cyrillic-ext"
    rel="stylesheet">

    <!-- Sctipt -->
    <script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
</head>
<body>
 
<!--  Header-->
<div class="container">
    <?php
    include("include/header.php");
    ?>
</div>

<div class="container">
    <ol class="crumb">
        <li>
            <a href="index.php" title="Главная" itemprop="url">
                <img class="home" src="img/home/home.png">
            </a>
        </li>
        <li class="active">
            <a href="index.php">Компания</a>
        </li>
    </ol>
</div>

<div class="wr_top">
    <div class="container top">
        <div class="wr_h2">
            Компания Град
            <div class="tire">
            </div>
        </div>
        <p>
            Лидер российского рынка парфюмерно-косметической продукции и товаров бытовой химии. Компания, которая
            создает, реализует и продвигает собственные Бренды. История показала, что мы это делаем успешно.
        </p>
    </div>
</div>

<!-- Footer   -->
<div class="container">

    <?php
    include("include/footer.php");
    ?>

</div>

<div class="time"></div>

<div class="lik"></div>
</body>
</html>