<?php
    session_start();
    include_once 'includes/dbh.inc.php';
    $id = $_SESSION['userId'];
    if(isset($_POST['submit'])) {
        $file = $_FILES['file'];
        $fileName = $_FILES['file']['name'];
        $fileTmpName = $_FILES['file']['tmp_name'];
        $fileSize = $_FILES['file']['size'];
        $fileError = $_FILES['file']['error'];

        $fileExt = explode('.', $fileName);
        $fileActualExt = strtolower(end($fileExt));
        $allowed = array('jpg', 'jpeg', 'png');
        if(in_array($fileActualExt, $allowed)) {
            if($fileError === 0) {
                if($fileSize <16000000) {
                    $fileNameNew = "profile".$id.".".$fileActualExt;
                    $fileDestination = 'uploads/'.$fileNameNew;
                    $sql = "UPDATE profileimg SET status=1 WHERE userid='$id';";
                    $sql2 = "UPDATE users SET profile_image='$fileDestination' WHERE id_user='$id';";
                    echo $id."<br>";
                    echo $fileDestination."<br>";
                    $result = mysqli_query($conn, $sql);
                    $result2 = mysqli_query($conn, $sql2);
                    move_uploaded_file($fileTmpName, $fileDestination);
                    header("Location: profile.php?ID=".$id);
                
                } else {
                    echo "Your file is too big!";
                }
            } else {
                echo "There was an error uploading your file!";
            }
        } else{
            echo "You cannot upload this type of file!";
        }
        
    }
    exit();
?>