<?php
require_once("config.php");

$fname = htmlentities($_REQUEST["fname"]);
$lname = htmlentities($_REQUEST["lname"]);
$useremail =htmlentities( $_REQUEST["useremail"]);
$password =htmlentities($_REQUEST["password"]);
$encryptedPwd = md5(sha1($password)); //to encrypt password
$authToken = md5(sha1($password.$useremail));

$insertSignupData = "INSERT into my_users (fname,lname,email_addr,usr_pwd,auth) VALUES ('$fname','$lname','$useremail','$encryptedPwd','$authToken')";

$result = mysqli_query($connect,$insertSignupData);
if ($result == true) {
	header("location:signup.php?done_signup=Registration Successfull!!");
}


?>