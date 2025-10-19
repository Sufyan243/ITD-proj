<?php
$servername = "localhost";  
$username   = "root";       // Default XAMPP/WAMP username
$password   = "";           // Default password is empty
$dbname     = "laser_cutting"; // Your local database name (without prefix)

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected successfully to local database!";
}
?>

