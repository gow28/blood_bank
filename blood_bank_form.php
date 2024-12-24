<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood Bank Registration</title>
</head>
<body style="font-family: Arial, sans-serif; background-color: #f4f4f9; margin: 0; padding: 0; display: flex; justify-content: center; align-items: center; height: 100vh;">

    <div style="background-color: #ffffff; padding: 20px; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); max-width: 400px; width: 100%;">
        <h2 style="text-align: center; color: #333333; margin-bottom: 20px;">Blood Bank Registration Form</h2>
        <form action="blood_bank_register.php" method="POST" style="display: flex; flex-direction: column;">

            <label for="bank_name" style="margin-bottom: 5px; font-weight: bold; color: #555;">Blood Bank Name:</label>
            <input type="text" name="bank_name" required style="padding: 10px; margin-bottom: 15px; border: 1px solid #ccc; border-radius: 4px;">

            <label for="location" style="margin-bottom: 5px; font-weight: bold; color: #555;">Location:</label>
            <input type="text" name="location" required style="padding: 10px; margin-bottom: 15px; border: 1px solid #ccc; border-radius: 4px;">

            <label for="contact_number" style="margin-bottom: 5px; font-weight: bold; color: #555;">Contact Number:</label>
            <input type="text" name="contact_number" required style="padding: 10px; margin-bottom: 15px; border: 1px solid #ccc; border-radius: 4px;">

            <label for="email" style="margin-bottom: 5px; font-weight: bold; color: #555;">Email:</label>
            <input type="email" name="email" style="padding: 10px; margin-bottom: 15px; border: 1px solid #ccc; border-radius: 4px;">

            <label for="capacity" style="margin-bottom: 5px; font-weight: bold; color: #555;">Capacity:</label>
            <input type="number" name="capacity" required style="padding: 10px; margin-bottom: 15px; border: 1px solid #ccc; border-radius: 4px;">

            <label for="current_stock" style="margin-bottom: 5px; font-weight: bold; color: #555;">Current Blood Stock:</label>
            <input type="number" name="current_stock" required style="padding: 10px; margin-bottom: 20px; border: 1px solid #ccc; border-radius: 4px;">

            <input type="submit" value="Register Blood Bank" style="padding: 10px; border: none; background-color: #5cb85c; color: white; font-weight: bold; border-radius: 4px; cursor: pointer;">
        </form>
    </div>

</body>
</html>
