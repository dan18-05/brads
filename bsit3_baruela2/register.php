
<!-- filepath: c:\xampp\htdocs\bsit3_baruela2\register.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Register</h2>
    <form action="reg_insert.php" method="post">
        <label>First Name:</label>
        <input type="text" name="fname" required><br>

        <label>Last Name:</label>
        <input type="text" name="lname" required><br>

        <label>Gender:</label>
        <select name="gender" required>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
        </select><br>

        <label>Address:</label>
        <input type="text" name="address" required><br>

        <label>Contact:</label>
        <input type="text" name="contact" required><br>

        <button type="submit" name="submit">Register</button>
    </form>
</body>
</html>