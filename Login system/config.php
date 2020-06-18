<?php

	$host = "localhost";
	$dbuser = "mahi";
	$dbpwd = "mmbmahidul007";
	$dbname = "phptest";

	$connect = mysqli_connect($host,$dbuser,$dbpwd,$dbname);

	if (!$connect) {
		
		die("connection failed".mysqli_connect_error());
	}

?>