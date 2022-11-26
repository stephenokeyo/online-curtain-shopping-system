<?php

$servername = "localhost";
$username = "root";
$password = "";
$db = "curtain_shop";

// Create connection
$con = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqlt_connect_error());
}


?>