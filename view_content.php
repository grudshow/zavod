<?php
include("include/db_connect.php");
include("functions/functions.php");

$id1 = $_GET["id"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>
		Продукция
	</title>

	<!-- Styles -->
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/style.css">


	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,900&display=swap&subset=cyrillic-ext"
	rel="stylesheet">

	<!-- Sctipt -->
	<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
<!-- 	<script type="text/javascript" src="js/jquery-3.4.1.js"></script>
	<script src="js/zavod.js"></script> -->
</head>
<body>
	<div class="container">
		<?php
		include("include/header.php");
		?>
	</div>
	<?php
	$id = clear_string($_GET["id"]);
	$result = mysql_query("SELECT * FROM table_brand WHERE brand_id = '$id'", $link);

	if (mysql_num_rows($result) > 0) 
	{
		$rows = mysql_fetch_array($result);
		do {
			echo '
			<div class="container">
			<ol class="crumb">
			<li>
			<a href="index.php" title="Главная" itemprop="url">
			<img class="home" src="img/home/home.png">
			</a>
			</li>
			<li class="active">
			<a href="product.php">Продукция</a>
			</li>
			<li class="active">
			<a href="view_content.php?id='.$rows["brand_id"].'">'.$rows["title"].' </a>
			</li>
			</ol>
			</div>


			<div class="container">
			<div class="brands">
			<div class="wr_h2">
			'.$rows["title"].'
			<div class="tire">
			</div>
			</div>
			</div>
			</div>



			<div class="container">
			<div class="info-brand">
			<div class="history-left">
			<p>
			'.$rows["history"].'
			</p>
			<p>
			'.$rows["history1"].'
			</p>
			</div>
			<div class="history-right">
			<img src="img/item/'.$rows["image"].'">
			</div>
			<div class="brand-title">
			<h3>Преимущества продукта</h3>
			<ul class="blue-list">
			<li>
			'.$rows["brand_title"].'
			</li>
			<li>
			'.$rows["brand_title1"].'
			</li>
			</ul>
			</div>
			</div>
			</div>
			';
		}while ($rows = mysql_fetch_array($result));
	}
	?>

		<?php
		include("include/footer.php");
		?>


</body>
</html>