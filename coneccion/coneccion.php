<?php  
	$user = 'axqaykykbjcpef';
	$passwd = '8a06a7096a8bc4f3ad1052b752da7d19d03bd875a0a40b26aee0d15ac47412ec';
	$db = 'd6o9cokmonknip';
	$port = 5432;
	$host = 'ec2-54-196-89-124.compute-1.amazonaws.com';
	$strCnx = "host=$host port=$port dbname=$db user=$user password=$passwd";
	$cnx = pg_connect($strCnx) or die ("Error de conexion. ". pg_last_error());

?>