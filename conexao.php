<?php
$host = "localhost";
$username = "root";
$password = "rutys";
$database = "lia";
// Create connection
$conn = new mysqli($host, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>


