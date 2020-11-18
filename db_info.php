<?php
	$mysql_hostname = "localhost";
	$mysql_username = "root"; 
	$mysql_password = "mypassword";
	$mysql_database = "user"; 
	$mysql_port = '3306';
	$mysql_charset = 'UTF8';
	// DB 연결
	$mysqli = new mysqli($mysql_hostname, $mysql_username, $mysql_password, $mysql_database, $mysql_port, $mysql_charset);
?> 

