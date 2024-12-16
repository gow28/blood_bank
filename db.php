<?php
$host = 'localhost';  // Database host
$username = 'root';   // Database username
$password = 'Ng2004@28';       // Database password
$dbname = 'blood_bank_system';  // Database name

// Create a connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
