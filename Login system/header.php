<?php
session_start();

require_once("config.php");
if (isset($_COOKIE["currentUser"])) {
	
$currentAuth = $_COOKIE["currentUser"];

$checkDbAuth = "SELECT * FROM my_users WHERE auth='$currentAuth'";
$runCheckAuth = mysqli_query($connect,$checkDbAuth);
if (!mysqli_num_rows($runCheckAuth)===0) {
	
	setcookie("currentUser"," ",time()-(86400*50));
	header("location:login.php");
}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Profile Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<div id="wrapper">
<div id="header">
		<h1>Welcome to our website</h1>
		<a href="index.php">Home</a>
		<?php
		if (isset($_COOKIE["currentUser"])) {

			echo '<a href="profile.php">Profile</a>';
		}
		
		?>
		<?php
		if (!isset($_COOKIE["currentUser"])) {

			echo '<a href="login.php">Login</a>';
		}else {

			echo '<a href="logout_core.php">Logout</a>' ;
		}
		
		?>
		</div>