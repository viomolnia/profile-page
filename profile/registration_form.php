<?php

$message = "Registration successful!";

$username = $_POST["username"] ?? "";
$firstName = $_POST["firstname"] ?? "";
$lastName = $_POST["lastname"] ?? "";
$password = $_POST["password"] ?? "";
$confirmPassword = $_POST["confirmPassword"] ?? "";

//print_r("Thanks for your registration: <br>");
//print_r("Username: ".$username."<br>");
//print_r("First name: ".$firstName."<br>");
//print_r("LAst name: ".$lastName."<br>");
//print_r("Password: ".$password."<br>");
//print_r("Confirm password: ".$confirmPassword."<br>");

if ($username === "" || $firstName === "" ||
    $lastName === "" || $password === "" || $confirmPassword === ""){
    $message = "All Fields are required";
}

if($password !== $confirmPassword){
    $message = 'Passwords should be same<br>';
}

echo $message;

if ($message === "Registration successful!") {
    $file = new SplFileObject("users.txt", "a");
    $file->fwrite($username." ".$password);
    $file->fwrite("\r\n");
}