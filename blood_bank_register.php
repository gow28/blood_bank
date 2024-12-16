<?php
include('db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $bank_name = $_POST['bank_name'];
    $location = $_POST['location'];
    $contact_number = $_POST['contact_number'];
    $email = $_POST['email'];
    $capacity = $_POST['capacity'];
    $current_stock = $_POST['current_stock'];

    // Insert into blood_banks table
    $sql = "INSERT INTO blood_banks (bank_name, location, contact_number, email, capacity, current_stock)
            VALUES ('$bank_name', '$location', '$contact_number', '$email', '$capacity', '$current_stock')";

    if ($conn->query($sql) === TRUE) {
        echo "New blood bank registered successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
