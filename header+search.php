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
                    echo '<div class="user-logged">
                            <p>You are logged in!</p>
                            <a href="profilepage.php"><p class="button tertiary">Profile</p></a>
                            <a href="includes/logout.inc.php"><p class="logout-button button tertiary">Log out</p></a>
                        </div>';
                }
            ?>
		
                
                