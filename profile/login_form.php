<?php
include "UserRole.php";
session_start();

$message = "Login or password incorrect!";
$login = $_POST["login"] ?? "";
$password = $_POST["password"] ?? "";

$file = fopen("users.txt", "r");
if ($file) {
    while (($line = fgets($file)) !== false) {
        $line = preg_replace('/[\r\n]+/', "", $line);
        if (isRegistered($line, $login, $password)) {
            $message = "Welcome";
            $_SESSION['role'] = UserRole::$USER_ROLE;

            if (isAdmin($login)) {
                $_SESSION["role"] = UserRole::$ADMIN_ROLE;
            }
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
        </form>

        <form method=\"post\" action=\"http://localhost:8086/index.php\" enctype=\"multipart/form-data\">
            choose your image
            <input type=\"file\" name=\"file\"/><br>
            <input type=\"submit\" value=\"upload image\" name=\"upd\">
        </form>";
}

function isRegistered(string $line, string $inputLogin, string $inputPassword): bool {
    $credentials = explode(" ", $line);
    $registeredUsername =  $credentials[0];
    $registeredPassword = $credentials[1];
    $registeredEmail = $credentials[2];
    $totalInput = $inputLogin." ".$inputPassword;

    $result = $registeredUsername." ".$registeredPassword == $totalInput || $registeredEmail." ".$registeredPassword == $totalInput;

    if($result) {
        $_SESSION["user"] = $registeredUsername;
    }
    return $result;
}

function isAdmin(string $login): bool {
    return $login == strtolower(UserRole::$ADMIN_ROLE) || $login == UserRole::$ADMIN_EMAIL;
}