<?php
/**
 * Created by PhpStorm.
 * User: anna
 * Date: 17.22.4
 * Time: 19:08
 */

$name = $_POST["name"] ?? "";
$score = $_POST["score"] ?? 5;
$friend = $_POST["friend"] ?? "";
$comment = $_POST["comment"] ?? "";

print_r("Thanks for your comment: <br>");
print_r("Name: ".$name."<br>");
print_r("Score: ".$score."<br>");
print_r("Common friend: ".$friend."<br>");
print_r("Comment: ".$comment."<br>");