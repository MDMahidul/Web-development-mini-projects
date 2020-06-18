<?php 
if (!isset($_COOKIE["currentUser"])) {
	
	header("location:index.php");
}
?>
		
	<?php require_once("header.php");?>
		<div id="content">
			<h1><?php 
			if(isset($_COOKIE["currentUser"])){
				$currentUserTarget = $_COOKIE["currentUser"];

				$nameQuery = "SELECT * FROM my_users WHERE auth = '$currentUserTarget'";
				$result = mysqli_query($connect,$nameQuery);
				if ($result == true) {
					
					while ($row=mysqli_fetch_assoc($result)) {
						echo $row['fname'].' '.$row['lname'];
						echo '</h1>';
						$avatarimg = $row["avatar"];
						echo "<img src='../avatar/$avatarimg'>";
					}
				}
				
			} ?>
			<p>Junior Web developer</p>
			<a href="changepwd.php">Change Password</a>
		</div>

		<?php require_once("footer.php");?>
	