<?php
	$servername = "localhost";
	$username = "Phish";
	$password = "";
	$dbname = "Phish_Report";

	$connection = new mysqli($servername, $username, $password, $dbname);

	if($connection->connect_error) {
		echo $connection->connect_error;
	} 
