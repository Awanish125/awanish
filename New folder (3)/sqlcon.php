<?php
$servername = "remotemysql.com";
$username = "GEsjkTKQ2d";
$password = "0TiveGawiw";
$database_name ="GEsjkTKQ2d";
$port = 3306;

// Create connection
$conn = mysqli_connect($servername, $username, $password,$database_name,$port);

// Check connection
if (!$conn) {
    exit("Connection failed: " . mysqli_connect_error());
}

?>