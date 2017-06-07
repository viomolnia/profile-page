<?php

$message = [];

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

if ($username === "" || $firstName === "" || $lastName === "" ||
    $email === "" || $password === "" || $confirmPassword === ""){
    $message[] = "All Fields are required";
}

if($password !== $confirmPassword){
    $message[] = "Passwords should be same";
}

$file = fopen("users.txt", "r");
if ($file) {
    while (($line = fgets($file)) !== false) {
        $line = preg_replace('/[\r\n]+/', "", $line);
        if (isRegistered($line, $username, $email)) {
            $message[] = "User already exists!";
        }
    }
    fclose($file);
} else {
    $message[] = "Technical error";
}

if (empty($message)) {
    $message[] ="Registration successful!";
}

print_r($message);

if ($message[0] === "Registration successful!") {
    $file = new SplFileObject("users.txt", "a");
    $file->fwrite($username." ".$password." ".$email);
    $file->fwrite("\r\n");
}

function isEmailValid(string $email):bool {
    return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
}

function isRegistered(string $line, string $inputUsername, string $inputEmail): bool {
    $credentials = explode(" ", $line);
    $registeredUsername =  $credentials[0];
    $registeredEmail = $credentials[2];

    return $registeredUsername == $registeredUsername || $registeredEmail === $registeredEmail;
}