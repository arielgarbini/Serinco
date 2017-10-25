<?php

$servername = "localhost";
$username = "coffeeta_ccsa";
$password = "Ariel1988";
$dbname = "coffeeta_ccsa";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>