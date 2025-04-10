<!-- filepath: c:\xampp\htdocs\bsit3_baruela2\reg_insert.php -->
<?php
include 'includes/dbcon.php'; // Include the database connection file

if (isset($_POST['submit'])) {
    // Retrieve and sanitize form inputs
    $fname = mysqli_real_escape_string($con, $_POST['fname']);
    $lname = mysqli_real_escape_string($con, $_POST['lname']);
    $gender = mysqli_real_escape_string($con, $_POST['gender']);
    $address = mysqli_real_escape_string($con, $_POST['address']);
    $contact = mysqli_real_escape_string($con, $_POST['contact']);

    // SQL query to insert the new record
    $sql = "INSERT INTO tbl_accounts (fname, lname, gender, address, contact) 
            VALUES ('$fname', '$lname', '$gender', '$address', '$contact')";

    // Execute the query and handle success or error
    if (mysqli_query($con, $sql)) {
        header("Location: index.php"); // Redirect to the index page after successful insertion
        exit();
    } else {
        echo "Error: " . mysqli_error($con); // Display error message if the query fails
    }
}
?>