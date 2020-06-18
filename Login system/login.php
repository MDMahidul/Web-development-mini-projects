<?php 
if (isset($_COOKIE["currentUser"])) {
	
	header("location:profile.php");
}
?>


		<?php require_once("header.php");?>

		<div id="content">
			<h1 align="center">Login Form</h1>
			<div id="loginBoxes" align="center">
				<form action="login_core.php">
					<input type="text" name="usrname" placeholder="User Email">
					<br><br>
					<input type="password" name="pwd" placeholder="Password">
					<br><br>
					<input type="submit" id="loginbutton" name="loginBtn" value="Login">
					<br><br>
					<?php

					if (isset($_REQUEST["wrong_info"])) {
						echo '<b style="color: red;">Username or Password is Wrong!</b>';
					}
					?>
				</form>
			</div>
		</div>
		<p style="text-align: center;">If not registered yet <a style="color: red;" href="signup.php">click here</a></p>

		<?php require_once("footer.php");?>
