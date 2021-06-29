<?php

$servername = "127.0.0.1:3325";
$username = "root";
$password = "";
$db = "ecommerce";

// Create connection
$con = mysqli_connect($servername, $username, $password,$db);
$connection=$con;
// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

//echo "Connected successfully";
?>