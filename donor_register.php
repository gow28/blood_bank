<?php
include('db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $blood_group = $_POST['blood_group'];
    $contact_number = $_POST['contact_number'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $date_of_donation = $_POST['date_of_donation'];

    // Insert into donors table
    $sql = "INSERT INTO donors (name, age, gender, blood_group, contact_number, email, address, date_of_donation)
            VALUES ('$name', '$age', '$gender', '$blood_group', '$contact_number', '$email', '$address', '$date_of_donation')";

    if ($conn->query($sql) === TRUE) {
        echo "New donor registered successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
