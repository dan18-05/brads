<!-- filepath: c:\xampp\htdocs\bsit3_baruela2\admin\my_table.php -->
<?php
include '../includes/dbcon.php';

$sql = "SELECT * FROM tbl_accounts ORDER BY id ASC";
$result = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accounts Table</title>
    <style>
        /* General Styling */
        body {
            background-color: #000; /* Black background */
            color: #fff; /* White text */
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        /* Container Styling */
        .container {
            max-width: 1200px;
            margin: 50px auto;
            padding: 20px;
            background-color: #1a1a1a;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.7);
            text-align: center;
        }

        /* Table Styling */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table th, table td {
            padding: 10px;
            border: 1px solid #444;
            text-align: center;
        }

        table th {
            background-color: #ff9900;
            color: #000;
            font-weight: bold;
        }

        table tr:nth-child(even) {
            background-color: #2a2a2a;
        }

        table tr:nth-child(odd) {
            background-color: #1a1a1a;
        }

        table tr:hover {
            background-color: #333;
        }

        /* Action Buttons */
        .action-btn-container {
            display: flex;
            justify-content: center;
            gap: 5px; /* Space between buttons */
        }

        .action-btn {
            padding: 5px 8px;
            text-decoration: none;
            border-radius: 5px;
            font-size: 12px;
            display: inline-block;
        }

        .view-btn {
            background-color: green;
            color: white;
        }

        .edit-btn {
            background-color: orange;
            color: white;
        }

        .delete-btn {
            background-color: red;
            color: white;
        }

        .action-btn:hover {
            opacity: 0.8;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Accounts Table</h2>
        <a href="../register.php" role="button" class="action-btn edit-btn">Add New Record</a>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Gender</th>
                    <th>Address</th>
                    <th>Contact</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['fname']; ?></td>
                    <td><?php echo $row['lname']; ?></td>
                    <td><?php echo $row['gender']; ?></td>
                    <td><?php echo $row['address']; ?></td>
                    <td><?php echo $row['contact']; ?></td>
                    <td>
                        <div class="action-btn-container">
                            <a href="view_rec.php?id=<?php echo $row['id']; ?>" class="action-btn view-btn">View</a>
                            <a href="edit_reg.php?id=<?php echo $row['id']; ?>" class="action-btn edit-btn">Edit</a>
                            <a href="delete_rec.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure?')" class="action-btn delete-btn">Delete</a>
                        </div>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>