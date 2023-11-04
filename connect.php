<?php
$hostname = "your_hostname"; // Replace with your database hostname
$username = "your_username"; // Replace with your database username
$password = "your_password"; // Replace with your database password
$database = "your_database"; // Replace with your database name

// Create a database connection
$connection = mysqli_connect('localhost', 'root ', '', 'newsub');

// Check the connection
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
