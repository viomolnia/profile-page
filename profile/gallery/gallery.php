<?php
session_start();
$fo = opendir("profile/gallery/img");
if (array_key_exists('delete_file', $_POST)) {
    $filename = "profile/gallery/".$_POST['delete_file'];
    if (file_exists($filename)) {
        unlink($filename);
        echo 'File '.$filename.' has been deleted';
    } else {
        echo 'Could not delete '.$filename.', file does not exist';
    }
}
while ($file = readdir($fo)) {
    if ($file != "." && $file != ".." && $file != "Thumbs.db") {
        echo "<img src = '/profile/gallery/img/$file' width='150' height='150'/>
        &nbsp;&nbsp;&nbsp;&nbsp;";

        echo '<form method="post">';
        echo '<input type="hidden" value="'.$file.'" name="delete_file" />';
        if ($_SESSION["username"] == "admin") echo '<input type="submit" value="Delete image" />';
        echo '</form>';
    }

}