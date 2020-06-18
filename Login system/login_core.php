<?php
require_once("config.php");

$userInputName = $_REQUEST["usrname"];
$userInputpwd = $_REQUEST["pwd"]; 
$createAuth = md5(sha1($userInputpwd.$userInputName));

$matchQuery ="SELECT * FROM my_users WHERE auth='$createAuth'";

$result = mysqli_query($connect,$matchQuery);

$checkCount = mysqli_num_rows($result);
if ($result == true) {
	if ($checkCount === 1) {
		setcookie("currentUser",$createAuth,time()+(86400*7));
		header("location: profile.php");
			}else{
	
				header("location:login.php?wrong_info");
			}
}




?>