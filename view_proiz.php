<?php 
include("include/db_connect.php");
include("functions/functions.php");
$view = clear_string($_GET["view"]);

switch ($view) {
    case "proiz_rondol":
    $query_aystopper = "WHERE proiz_rondol = '1'";
    break;
    case "proiz_balon":
    $query_aystopper = "WHERE proiz_balon = '1'";
    break;  
    case "proiz_arozol":
    $query_aystopper = "WHERE proiz_arozol = '1'";
    break;
    case "proiz_propel":
    $query_aystopper = "WHERE proiz_propel = '1'";
    break;  
    case "proiz_klapan":
    $query_aystopper = "WHERE proiz_klapan = '1'";
    break;
    case "proiz_litii":
    $query_aystopper = "WHERE proiz_litii = '1'";
    break;  
    case "proiz_complex":
    $query_aystopper = "WHERE proiz_complex = '1'";
    break;
    default:
    $query_aystopper = "";
    break;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Услуги и Производство</title>

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
                <a href="proizvodstvo.php">Услуги и Производство</a>
            </li>
        </ol>

        <div class="brands">
            <div class="wr_h2">
                Услуги и Производство
                <div class="tire">
                </div>
            </div>
        </div>

        <div class="proiz-title">
            <div class="proiz1">
                «Град» — крупнейший производитель парфюмерно-косметической и хозяйственно-бытовой продукции в аэрозольной упаковке в России и странах СНГ.
            </div>
            <div class="proiz2">
                Производство осуществляется: ОАО «Град» (г. Ставрополь, Ставропольский край) с использованием современных технологий, сырья и материалов на оборудовании ведущих мировых производителей. 
            </div>
        </div>

        <div class="proiz-list">
            <a href="view_proiz.php?view=proiz_rondol" class="proiz-item">Производство алюминиевых ронделей</a>
            <a href="view_proiz.php?view=proiz_balon" class="proiz-item">Производство аэрозольного алюминиевого баллона</a>
            <a href="view_proiz.php?view=proiz_arozol" class="proiz-item">Производство продукции в аэрозольной упаковке</a>
            <a href="view_proiz.php?view=proiz_propel" class="proiz-item">Производство и хранение пропеллентов</a>
            <a href="view_proiz.php?view=proiz_klapan" class="proiz-item">Производство аэрозольного клапана</a>
            <a href="view_proiz.php?view=proiz_litii" class="proiz-item">Литьевое производство</a>
            <a href="view_proiz.php?view=proiz_complex" class="proiz-item">Комплектация подарочных наборов и промоупаковок</a>
        </div>
        <?php

        $result = mysql_query("SELECT * FROM  proizodvstvo $query_aystopper", $link);

        if (mysql_num_rows($result) > 0) {
            $rows = mysql_fetch_array($result);

            do {
                echo '
                <div class="proiz-opis">
                <img src="img/proiz/'.$rows["image"].'">
                <div class="proiz-zagolovok">
                '.$rows["title"].'
                </div>
                <ul>
                <li>
                '.$rows["li1"].'
                </li>
                <li>
                '.$rows["li2"].'
                </li>
                </ul>
                </div>
                </div>
                ';
            } while ($rows = mysql_fetch_array($result));
        }
        ?>

        <?php 
        include("include/footer.php");
        ?>
    </div>
</body>
</html>