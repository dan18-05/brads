<!-- filepath: c:\xampp\htdocs\bsit3_baruela2\admin\edit_confirm.php -->
<?php
include '../includes/dbcon.php'; // Include the database connection file

// Check if the form was submitted
if (isset($_POST['update'])) {
    // Retrieve and sanitize form inputs
    $id = mysqli_real_escape_string($con, $_POST['id']);
    $fname = mysqli_real_escape_string($con, $_POST['fname']);
    $lname = mysqli_real_escape_string($con, $_POST['lname']);
    $gender = mysqli_real_escape_string($con, $_POST['gender']);
    $address = mysqli_real_escape_string($con, $_POST['address']);
    $contact = mysqli_real_escape_string($con, $_POST['contact']);

    // SQL query to update the record
    $sql = "UPDATE tbl_accounts 
            SET fname = '$fname', lname = '$lname', gender = '$gender', address = '$address', contact = '$contact' 
            WHERE id = $id";

    // Execute the query and handle success or error
    if (mysqli_query($con, $sql)) {
        header("Location: my_table.php"); // Redirect to my_table.php after update
        exit();
    } else {
        echo "Error updating record: " . mysqli_error($con); // Display error message if the query fails
    }
} else {
    die("Invalid request. Form not submitted.");
}
?>