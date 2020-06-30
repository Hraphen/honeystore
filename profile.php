<?php
    require "header.php";        
        include_once 'includes/dbh.inc.php';
        $ID = $_SESSION['userId'];
        $sql = "SELECT id_user, username, email, profile_image FROM users WHERE id_user='$ID';";
        $sql2 = "SELECT * FROM profileimg WHERE userid='$ID';";
        $result = mysqli_query($conn, $sql);
        $result2 = mysqli_query($conn, $sql2);
        $row2 = mysqli_fetch_assoc($result2);
        $row = mysqli_fetch_assoc($result);
        $profile_image = $row['profile_image'];
        $username = $row['username'];
        $email = $row['email'];
?>
    <h1 class="title">.Profile</h1>
	<h4 class="sub-title">your profile details</h4>
    <div class="section profile">
        <div class="profile-image">
            <div class="profile-avatar">
                <P>Profile picture</p>
                <div class="profile-image-container">
                
                    <?php
                        if($row2['status'] == 1) {
                            echo '<img src="'.$row['profile_image'].'" />';
                        } else {
                            echo '<img src="images/defaultprofileimage.png">';
                        }
                    ?>
                </div>
            </div>
            <div class="image-insert">
                <form action="upload.php" method="POST" enctype="multipart/form-data">
                    <div class="input-file">
                        <input type="file" name="file" class="input-file">
                        <p>Select file</p>
                    </div>
                    <button class="button-buy tertiary display-inline-block" type="submit" name="submit">Upload</button>
                </form>
            </div>
        </div>
            <div class="profile-data">
            <?php
                echo'<p>Username: '.$row['username'].'</p>';
                echo'<p>Email Address: '.$row['email'].'</p>';
            ?>
            </div>
        </div>
    </div>
<?php
	require "footer.php";
?>