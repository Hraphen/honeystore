<?php
	require "header.php";
?>

	<div class="item-display section">
		<h1>Register Account</h1>
		<div class="section signup-form">
			<?php
			error_reporting (E_ALL ^ E_NOTICE);
			if(isset($_GET['error'])) {
				if($_GET['error'] == "emptyfields") {
					echo '<div class="error-box">
							<img src="images/error.png" width="200" height="200">
							<p>Error: You have to fill in all the fields!</p>
						</div>';
				}
				else if($_GET['error'] == "invalidmail") {
					echo '<div class="error-box">
							<img src="images/error.png" width="200" height="200">
							<p>Error: Invalid e-mail address!</p>
						</div>';
				}
				else if($_GET['error'] == "invalidusername") {
					echo '<div class="error-box">
							<img src="images/error.png" width="200" height="200">
							<p>Error: Use a vaild username! (a-z A-Z 0-9)</p>
						</div>';
				}
				else if($_GET['error'] == "invalidpasswordrepeat") {
					echo '<div class="error-box">
							<img src="images/error.png" width="200" height="200">
							<p>Error: Passwords do not match!</p>
						</div>';
				}
				else if($_GET['error'] == "usernametaken") {
					echo '<div class="error-box">
							<img src="images/error.png" width="200" height="200">
							<p>Error: Passwords do not match!</p>
						</div>';
				}	
			}
			else if($_GET['signup'] == "success") {
					echo '<div class="success-box">
							<img src="images/success.png" width="200" height="200">
							<p>Account succesfully created!</p>
						</div>';
				}	
			?>
			<form action="includes/signup.inc.php" method="post">
				<p>Username: </p><input type="text" name="uid">
				<p>E-mail: </p><input type="text" name="mail">
				<p >Password: </p><input type="password" name="pwd">
				<p >Re-enter Password: </p><input type="password" name="pwd-repeat">
				<button class="tertiary" type="submit" name="login-submit"></button>
			</form>
		</div>
	</div>
</div>
<?php
	require "footer.php";
?>