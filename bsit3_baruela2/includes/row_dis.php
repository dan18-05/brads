<?php
// Include the database connection file
include 'dbcon.php';

// SQL query to select all rows from tbl_accounts
$sql = "SELECT * FROM tbl_accounts ORDER BY id ASC";
$result = mysqli_query($con, $sql);

// Check if the query was successful
if (!$result) {
    die("Query failed: " . mysqli_error($con));
}
?>