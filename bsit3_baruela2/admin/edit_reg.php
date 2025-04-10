<!-- filepath: c:\xampp\htdocs\bsit3_baruela2\admin\edit_reg.php -->
<?php
include '../includes/dbcon.php'; // Include the database connection file

// Check if the 'id' parameter is provided in the URL
if (!isset($_GET['id'])) {
    die("Invalid request. No ID provided.");
}

$id = $_GET['id']; // Get the record ID from the URL
$sql = "SELECT * FROM tbl_accounts WHERE id = $id"; // Query to fetch the record
$result = mysqli_query($con, $sql);

// Check if the record exists
if (!$result || mysqli_num_rows($result) == 0) {
    die("Record not found.");
}

$row = mysqli_fetch_assoc($result); // Fetch the record data
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Record</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <div class="container">
    <h2>Edit Record</h2>
    <form action="edit_confirm.php" method="post">
        <!-- Hidden input to store the ID -->
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

        <label>First Name:</label>
        <input type="text" name="fname" value="<?php echo $row['fname']; ?>" required><br>

        <label>Last Name:</label>
        <input type="text" name="lname" value="<?php echo $row['lname']; ?>" required><br>

        <label>Gender:</label>
        <select name="gender" required>
            <option value="Male" <?php echo ($row['gender'] == 'Male') ? 'selected' : ''; ?>>Male</option>
            <option value="Female" <?php echo ($row['gender'] == 'Female') ? 'selected' : ''; ?>>Female</option>
        </select><br>

        <label>Address:</label>
        <input type="text" name="address" value="<?php echo $row['address']; ?>" required><br>

        <label>Contact:</label>
        <input type="text" name="contact" value="<?php echo $row['contact']; ?>" required><br>

        <button type="submit" name="update">Update</button>
    </form>
    </div>
</body>
</html>