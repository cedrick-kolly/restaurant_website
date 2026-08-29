<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "restaurant_db";

$conn = mysqli_connect(
    $host, $user, $password, $database
); // creates a connection between php and my sqly

if(!$conn){
    die("..");//message for non-connected database
}
echo ".";// message for a connected data base

?>