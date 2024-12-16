<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood Bank Registration</title>
</head>
<body>
    <h2>Blood Bank Registration Form</h2>
    <form action="blood_bank_register.php" method="POST">
        <label for="bank_name">Blood Bank Name:</label><br>
        <input type="text" name="bank_name" required><br><br>

        <label for="location">Location:</label><br>
        <input type="text" name="location" required><br><br>

        <label for="contact_number">Contact Number:</label><br>
        <input type="text" name="contact_number" required><br><br>

        <label for="email">Email:</label><br>
        <input type="email" name="email"><br><br>

        <label for="capacity">Capacity:</label><br>
        <input type="number" name="capacity" required><br><br>

        <label for="current_stock">Current Blood Stock:</label><br>
        <input type="number" name="current_stock" required><br><br>

        <input type="submit" value="Register Blood Bank">
    </form>
</body>
</html>
