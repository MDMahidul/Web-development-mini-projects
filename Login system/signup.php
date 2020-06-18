<?php
 require_once("header.php");
?>
<br>
<b style="color:green;"><?php

	if (isset($_REQUEST['done_signup'])) {
		
		echo $_REQUEST["done_signup"];
	}

?></b><br>
 <form action="signup_core.php" method="POST">
	
	<input type="text" name="fname" placeholder="First Name">
	<input type="text" name="lname" placeholder="Last Name">
	<input type="text" name="useremail" placeholder="Email">
	<input type="password" name="password" placeholder="Password">
	<input type="submit" name="submitsignup" value="Signup">
 </form>

<?php
 require_once("footer.php");

?>