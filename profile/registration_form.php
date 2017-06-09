<?php
include "AlertMessage.php";

$messages = [];

$username = $_POST["username"] ?? "";
$firstName = $_POST["firstname"] ?? "";
$lastName = $_POST["lastname"] ?? "";
$email = $_POST["email"] ?? "";
$password = $_POST["password"] ?? "";
$confirmPassword = $_POST["confirmPassword"] ?? "";

//print_r("Thanks for your registration: <br>");
//print_r("Username: ".$username."<br>");
//print_r("First name: ".$firstName."<br>");
//print_r("Last name: ".$lastName."<br>");
//print_r("Email: ".$email."<br>");
//print_r("Password: ".$password."<br>");
//print_r("Confirm password: ".$confirmPassword."<br>");

$messages = isRegistrationDataEmpty($username, $firstName, $lastName, $email, $password, $confirmPassword, $messages);

$messages = checkIfUserExists($username, $email, $messages);

if($email != "" && !isEmailValid($email)) {
    $messages[] = AlertMessage::$INCORRECT_EMAIL;
}

if($password != "" && $confirmPassword != "" && $password != $confirmPassword){
    $messages[] = AlertMessage::$INCORRECT_PASSES;
}

if (empty($messages)) {
    $messages = uploadProfilePicture($messages, $username);
}

if (empty($messages)) {
    $messages[] = AlertMessage::$REGISTRATION_OK;
}

printAlertMessages($messages);

if ($messages[0] == AlertMessage::$REGISTRATION_OK) {
    writeUserToDB($username, $password, $email);
}

function writeUserToDB(string $username, string $password, string $email) {
    $file = new SplFileObject("users.txt", "a");
    $file->fwrite($username . " " . $password . " " . $email);
    $file->fwrite("\r\n");
}

function isEmailValid(string $email): bool {
    return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
}

function isRegistered(string $line, string $inputUsername, string $inputEmail): bool {
    $credentials = explode(" ", $line);
    $registeredUsername =  $credentials[0];
    $registeredEmail = $credentials[2];

    return $registeredUsername == $inputUsername || $registeredEmail == $inputEmail;
}

function isRegistrationDataEmpty(string $username, string $firstName, string $lastName,
                                 string $email, string $password, string $confirmPassword, array $messages): array {
    if ($username == "" || $firstName == "" || $lastName == "" ||
        $email == "" || $password == "" || $confirmPassword == "") {
        $messages[] = AlertMessage::$EMPTY_FIELDS;
    }
    return $messages;
}

function uploadProfilePicture(array $messages, string $username):array {
    if ($_FILES["file"]["size"] > 500000) {
        $messages[] = AlertMessage::$TOO_LARGE_FILE;
        return $messages;
    } else {
        $supported_image = array('jpg', 'jpeg', 'png');

        $src_file_name = $_FILES['file']['name'];
        $ext = strtolower(pathinfo($src_file_name, PATHINFO_EXTENSION));
        if (in_array($ext, $supported_image)) {
            move_uploaded_file($_FILES['file']['tmp_name'], "profile/img/" . $username . "." . $ext);
        } else {
            $messages[] = AlertMessage::$INVALID_IMAGE;
        }
    }
    return $messages;
}

function checkIfUserExists(string $username, string $email, array $messages):array {
    $file = fopen("users.txt", "r");
    if ($file) {
        while (($line = fgets($file)) !== false) {
            $line = preg_replace('/[\r\n]+/', "", $line);
            if (isRegistered($line, $username, $email)) {
                $messages[] = AlertMessage::$USER_EXISTS;
            }
        }
        fclose($file);
    } else {
        $messages[] = AlertMessage::$TECH_ERR;
    }
    return $messages;
}

function printAlertMessages(array $messages) {
    foreach ($messages as $message) {
        echo "<font color='#dd4444'>".$message."</font>";
    }
}