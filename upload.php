<?php
include "profile/UserRole.php";
session_start();

if (isset($_POST['upd'])) {
    if (file_exists("profile/gallery/img/" . $_FILES['file']['name'])) {
        echo "<font color='red'>" . $_FILES['file']['name'] . " already exists </font>";
    } else {
        $supported_image = array('jpg', 'jpeg', 'png');

        $src_file_name = $_FILES['file']['name'];
        $ext = strtolower(pathinfo($src_file_name, PATHINFO_EXTENSION));
        if (in_array($ext, $supported_image)) {
            move_uploaded_file($_FILES['file']['tmp_name'], "profile/gallery/img/" . $_FILES['file']['name']);
            echo $_FILES['file']['name'] . " image uploaded";
        } else {
            echo "<font color='red'>Please choose a valid image</font>";
        }
    }
}

if($_SESSION["role"] == UserRole::$ADMIN_ROLE) {
    echo "<form method='post' enctype='multipart/form-data'>
        choose your image
    <input type='file' name='file'/><br>
    <input type='submit' value='upload image' name='upd'>
    </form>";
} else {
    echo "<font color='red'>You have mo rights to upload pictures</font>";
}


