<?php 
	$db_host  = 'localhost';
	$db_user  = 'admin';
	$db_pass  = '123';
	$db_database = 'db_zavod';

	$link = mysql_connect($db_host, $db_user,  $db_pass, $db_database);

	mysql_select_db($db_database, $link) or die("Нет соединения с БД ".mysql_error());
	mysql_query("SET names UTF-8");
 ?>