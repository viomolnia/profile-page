<?php
include "UserRole.php";
session_start();

$message = "Login or password incorrect!";
$username = $_POST["username"] ?? "";
$password = $_POST["password"] ?? "";

$file = fopen("users.txt", "r");
if ($file) {
    while (($line = fgets($file)) !== false) {
        $line = preg_replace('/[\r\n]+/', "", $line);
        if ($line == $username." ".$password) {
            if ($username == strtolower(UserRole::$ADMIN)) {
                $_SESSION["role"] = UserRole::$ADMIN;
            } else {
                $_SESSION['role'] = UserRole::$USER;
            }
            $message = "Welcome";

        }
    }
    fclose($file);
} else {
    $message = "Technical error";
}

echo $message."\n";
if ($message == "Welcome") {
    echo "<form method=\"POST\" action=\"http://localhost:8084/logout_form.php\">
        <input type=\"submit\" value=\"Log out\">
        </form>
        
        <form method=\"POST\" action=\"http://localhost:8085/index.php\">
        <input type=\"submit\" value=\"Go to gallery\">
        </form>";
}