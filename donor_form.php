<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donor Registration</title>
</head>
<body style="font-family: Arial, sans-serif; background-color: #f4f4f9; margin: 0; padding: 0; display: flex; justify-content: center; align-items: center; height: 100vh;">

    <div style="background-color: #ffffff; padding: 20px; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); max-width: 400px; width: 100%;">
        <h2 style="text-align: center; color: #333333; margin-bottom: 20px;">Donor Registration Form</h2>
        <form action="donor_register.php" method="POST" style="display: flex; flex-direction: column;">
            
            <label for="name" style="margin-bottom: 5px; font-weight: bold; color: #555;">Name:</label>
            <input type="text" name="name" required style="padding: 10px; margin-bottom: 15px; border: 1px solid #ccc; border-radius: 4px;">

            <label for="age" style="margin-bottom: 5px; font-weight: bold; color: #555;">Age:</label>
            <input type="number" name="age" required style="padding: 10px; margin-bottom: 15px; border: 1px solid #ccc; border-radius: 4px;">

            <label for="gender" style="margin-bottom: 5px; font-weight: bold; color: #555;">Gender:</label>
            <select name="gender" required style="padding: 10px; margin-bottom: 15px; border: 1px solid #ccc; border-radius: 4px;">
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>

            <label for="blood_group" style="margin-bottom: 5px; font-weight: bold; color: #555;">Blood Group:</label>
            <input type="text" name="blood_group" required style="padding: 10px; margin-bottom: 15px; border: 1px solid #ccc; border-radius: 4px;">

            <label for="contact_number" style="margin-bottom: 5px; font-weight: bold; color: #555;">Contact Number:</label>
            <input type="text" name="contact_number" required style="padding: 10px; margin-bottom: 15px; border: 1px solid #ccc; border-radius: 4px;">

            <label for="email" style="margin-bottom: 5px; font-weight: bold; color: #555;">Email:</label>
            <input type="email" name="email" style="padding: 10px; margin-bottom: 15px; border: 1px solid #ccc; border-radius: 4px;">

            <label for="address" style="margin-bottom: 5px; font-weight: bold; color: #555;">Address:</label>
            <textarea name="address" required style="padding: 10px; margin-bottom: 15px; border: 1px solid #ccc; border-radius: 4px; resize: vertical;"></textarea>

            <label for="date_of_donation" style="margin-bottom: 5px; font-weight: bold; color: #555;">Date of Donation:</label>
            <input type="date" name="date_of_donation" required style="padding: 10px; margin-bottom: 20px; border: 1px solid #ccc; border-radius: 4px;">

            <input type="submit" value="Register Donor" style="padding: 10px; border: none; background-color: #5cb85c; color: white; font-weight: bold; border-radius: 4px; cursor: pointer;">
        </form>
    </div>

</body>
</html>
