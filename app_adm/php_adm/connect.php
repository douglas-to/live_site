<?php 

	$DB_HOST = "localhost";
	$DB_USER = "root";
	$DB_PASSWORD = "";
	$DB_NAME = "live_db";


	$mysqli = new mysqli($DB_HOST, $DB_USER, $DB_PASSWORD, $DB_NAME); 

	if(!$mysqli){
		die("Houve um erro! " . mysqli_connect_error());
	}
?>