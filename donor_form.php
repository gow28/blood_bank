<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donor Registration</title>
</head>
<body>
    <h2>Donor Registration Form</h2>
    <form action="donor_register.php" method="POST">
        <label for="name">Name:</label><br>
        <input type="text" name="name" required><br><br>

        <label for="age">Age:</label><br>
        <input type="number" name="age" required><br><br>

        <label for="gender">Gender:</label><br>
        <select name="gender" required>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
        </select><br><br>

        <label for="blood_group">Blood Group:</label><br>
        <input type="text" name="blood_group" required><br><br>

        <label for="contact_number">Contact Number:</label><br>
        <input type="text" name="contact_number" required><br><br>

        <label for="email">Email:</label><br>
        <input type="email" name="email"><br><br>

        <label for="address">Address:</label><br>
        <textarea name="address" required></textarea><br><br>

        <label for="date_of_donation">Date of Donation:</label><br>
        <input type="date" name="date_of_donation" required><br><br>

        <input type="submit" value="Register Donor">
    </form>
</body>
</html>
