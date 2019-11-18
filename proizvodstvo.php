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
        <div class="proiz-opis">
            <img src="img/proiz/Proizvodstvo-alyuminievyh-rondelej.jpg">
            <div class="proiz-zagolovok">
                Производство алюминиевых ронделей
            </div>
            <ul>
                <li>
                    Производственные мощности: 6 000 тонн в год
                </li>
                <li>
                    Высококонкурентоспособное производственное оборудование соответствует европейским и международным стандартам
                </li>
            </ul>
        </div>

    <?php 
        include("include/footer.php");
     ?>
    </div>


    </body>
    </html>