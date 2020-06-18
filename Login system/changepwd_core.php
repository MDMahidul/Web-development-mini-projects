<?php
require_once("config.php");

$getCurrentUser = $_COOKIE['currentUser'];

$oldpwd = htmlentities($_REQUEST["oldpwd"]);
$newpwd = htmlentities($_REQUEST["newpwd"]);
$cfmpwd =htmlentities( $_REQUEST["cfmpwd"]);

$checkoldpwd = "SELECT * FROM my_users WHERE auth='$getCurrentUser'";
$result = mysqli_query($connect,$checkoldpwd);

if ($result == true) {
	
	if (mysqli_num_rows($result)===1) {
		
		while ($getCurrentUserData = mysqli_fetch_array($result)) {
		 	
		 	$userEmail = $getCurrentUserData["email_addr"];
		 } 
	}
}
$generateAuth =md5(sha1($oldpwd.$userEmail)) ;

if ($generateAuth == $getCurrentUser && $newpwd==$cfmpwd) {
	
	$hasPwd = md5(sha1($cfmpwd));
	$newAuth = md5(sha1($newpwd.$userEmail));
	$updatePwd = "UPDATE my_users SET usr_pwd='$hasPwd', auth='$newAuth'";
	$runPwdQuery = mysqli_query($connect,$updatePwd);
	if ($runPwdQuery==true) {
		
		setcookie("currentUser"," ",time()-(86400*50));
		setcookie("currentUser",$newAuth,time()+(86400*7));
		header("location: changepwd.php?change_pwd=Password changed!!");
	}
}else{
	header("location:changepwd.php?dontmatch=Password did not match");
}

?>