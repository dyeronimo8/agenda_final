<?php

	define("HOST", "localhost");
	define("USER", "root");
	define("PASS", "");
	define("BASE", "agenda");
	
	$link = mysql_connect(HOST, USER, PASS) or die(mysql_error());


	mysql_select_db(BASE, $link) or die(mysql_error());


	//echo 'cheguei aqui';
	//die;



?>