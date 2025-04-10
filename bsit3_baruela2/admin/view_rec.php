<!-- filepath: c:\xampp\htdocs\bsit3_baruela2\admin\view_rec.php -->
<?php
include '../includes/dbcon.php';

// Check if the 'id' parameter is set in the URL
if (isset($_GET['id'])) {
    $id = intval($_GET['id']); // Get the ID and ensure it's an integer

    // Fetch the record from the database
    $sql = "SELECT * FROM tbl_accounts WHERE id = $id";
    $result = mysqli_query($con, $sql);

    // Check if the record exists
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result); // Fetch the record as an associative array
    } else {
        echo "<p>Record not found.</p>";
        exit;
    }
} else {
    echo "<p>Invalid request.</p>";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Record</title>
    <style>
        body {
            background-color: #000;
            color: #fff;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #1a1a1a;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.7);
            text-align: center;
        }

        h2 {
            color: #ff9900;
            margin-bottom: 20px;
        }

        .info {
            text-align: left;
            margin-bottom: 20px;
        }

        .info p {
            margin: 10px 0;
        }

        .back-btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #ff9900;
            color: #000;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
        }

        .back-btn:hover {
            background-color: #cc7a00;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>View Record</h2>
        <div class="info">
            <p><strong>ID:</strong> <?php echo $row['id']; ?></p>
            <p><strong>First Name:</strong> <?php echo $row['fname']; ?></p>
            <p><strong>Last Name:</strong> <?php echo $row['lname']; ?></p>
            <p><strong>Gender:</strong> <?php echo $row['gender']; ?></p>
            <p><strong>Address:</strong> <?php echo $row['address']; ?></p>
            <p><strong>Contact:</strong> <?php echo $row['contact']; ?></p>
        </div>
        <a href="my_table.php" class="back-btn">Back to Table</a>
    </div>
</body>
</html>