<?php
session_start();
if (isset($_POST['upd'])) {
    if ($_FILES["file"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }else {
        $supported_image = array('jpg', 'jpeg', 'png');

        $src_file_name = $_FILES['file']['name'];
        $ext = strtolower(pathinfo($src_file_name, PATHINFO_EXTENSION));
        if (in_array($ext, $supported_image)) {
            move_uploaded_file($_FILES['file']['tmp_name'], "profile/img/" . $_SESSION["username"].".".$ext);
            echo "Your profile picture was successfully uploaded!";
        } else {
            echo "<font color='red'>Please choose a valid image</font>";
        }
    }
}