<?php
 require_once("header.php");
?>
<br>
<b style="color:green;"><?php

	if (isset($_REQUEST['change_pwd'])) {
		
		echo $_REQUEST["change_pwd"];
	}elseif (isset($_REQUEST["dontmatch"])) {
		
		echo "<b style='color:red;'>" . $_REQUEST["dontmatch"]. "</b>";
	}

?></b><br>
 <form action="changepwd_core.php" method="POST">
	
	<input type="text" name="oldpwd" placeholder="Old Password">
	<input type="text" name="newpwd" placeholder="New Password">
	<input type="text" name="cfmpwd" placeholder="Confirm Password">
	<input type="submit" name="pwdchangebtn" value="Change Password">
 </form>

<?php
 require_once("footer.php");

?>