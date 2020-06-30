<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<link href="css.css" type="text/css" rel="stylesheet"/>
	<link rel="icon"   type="image/png"   href="images/logo-plain.png">
	<title>API Store</title>
</head>
<body>
	<div class="page-border parallax">
        <div class="background"></div>
            <?php
                if(!isset($_SESSION['userId'])) {
                    echo '<div class="user-notlogged input-wrap">
                            <form action="includes/login.inc.php" method="post">
                                <p class="log-message">You are logged out!</p>
                                <input type="text" name="mailuid" placeholder="Username/E-mail...">
                                <input type="password" name="pwd" placeholder="Password...">
                                <button class="tertiary" type="submit" name="login-submit"><i class="ss-icon ss-standard">&#x25BB;</i></button>
                            </form>
                        </div>';
                }
                else {
					$ID = $_SESSION['userId'];
                    echo '<div class="user-logged">
                            <p>You are logged in!</p>
                            <a href="profile.php"><p class="button tertiary">Profile</p></a>
                            <a href="includes/logout.inc.php"><p class="logout-button button tertiary">Log out</p></a>
						</div>';
                }
            ?>
		<div id="wrap" class="container">
			<div id="header" class="clearfix section">
				<div id="nav" class="center">
					<div class="fonts-display clearfix">
						<p class="text-left alpha">
							<a href="index.php">Home</a>
						</p><p class="text-left">
							<a href="store.php">Store</a>
						</p><p class="text-left">
							<a href="health.php">Health</a>
						</p><p class="logo">
							<a>
								<img class="logo-type" src="images/logo-type.png" alt="Build By">
								<img class="logo-img" src="images/logo-plain.png">
							</a>
						</p><p class="text-right">
							<a href="info.php">Info</a>
						</p><p class="text-right">
							<?php
								if(isset($_SESSION['userId'])) {
									echo '<a href="profile.php?=';echo $ID.'">Profile</a>';
								}
								else {
									echo '<a href="signup.php">Sign up</a>';
								}
							?>
						</p><p class="text-right omega">
							<a href="contact.php">Contact</a>
						</p>
					</div>
                </div>
                
                