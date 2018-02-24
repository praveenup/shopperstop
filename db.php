<?php

$servername = "localhost";
$username = "praveenk";
$password = "praveen";
$dbname = "shoppingcart";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


?>