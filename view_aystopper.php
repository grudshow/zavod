<?php
include("include/db_connect.php");
include("functions/functions.php");
$go = clear_string($_GET["go"]);

switch ($go) {
	case "cosmetic":
		$query_aystopper = "WHERE cosmetic = '1'";
		$name_aystopper = "Косметика";
		break;
	case "ximia":
		$query_aystopper = "WHERE ximia = '1'";
		$name_aystopper = "Бытовая химия";
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
	<title>Продукция</title>

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
		include("include/crumb.php");
		include("include/brands.php");
		include("include/type.php");
	 ?>
	 </div>
			
		</div>
	</div>
	<div class="container">
		<div class="list-brand">
			<!--///////   Заполенния брендов  ///////////////-->
			<?php

			$result = mysql_query("SELECT * FROM table_brand $query_aystopper", $link);

			if (mysql_num_rows($result) > 0) {
				$rows = mysql_fetch_array($result);

				do {
					echo '
					<div class="product">
					<div class="product-img">
					<img src="img/item/' . $rows["image"] . '">
					</div>
					<div class="product-name">
					<a href="view_content.php?id='.$rows["brand_id"].'">' . $rows["title"] . '</a>
					</div>
					</div>
					';

				} while ($rows = mysql_fetch_array($result));

			}
			?>
			<!-- //////////////////////////////////////////////////////////////-->

		</div>
	</div>

		<?php
		include("include/footer.php");
		?>

</body>
</html>