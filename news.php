<?php
include("include/db_connect.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Новости</title>

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">


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
                <a href="index.php">Новости</a>
            </li>
        </ol>
    </div>

    <div class="container">
        <div class="brands">
            <div class="wr_h2">
                Наши новости
                <div class="tire">
                </div>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="news">

            <?php

            $result = mysql_query("SELECT * FROM news", $link);

            if (mysql_num_rows($result) > 0) {
                $row = mysql_fetch_array($result);

                do {
                    echo '
                    <div class="list-news">
                        <div class="news-img">
                        </div>
                            <div class="name-news">
                                '.$row["title"].'
                            </div>
                                <div class="item-news">
                                    '.$row["text"].'
                                </div>
                    </div>
                    ';
                } while ($row = mysql_fetch_array($result));
            } 
            ?>
 
        </div>
    </div>


        <?php
        include("include/footer.php");
        ?>

</body>
</html>