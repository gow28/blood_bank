<?php
$host = 'localhost';  // Database host
$username = 'root';   // Database username
$password = '';       // Database password-your password for the username
$dbname = 'blood_bank_system';  // Database name

// Create a connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
