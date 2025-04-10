<!-- filepath: c:\xampp\htdocs\bsit3_baruela2\admin\delete_rec.php -->
<?php
include '../includes/dbcon.php';

$id = $_GET['id'];

$sql = "DELETE FROM tbl_accounts WHERE id = $id";

if (mysqli_query($con, $sql)) {
    header("Location: my_table.php");
    exit();
} else {
    echo "Error: " . mysqli_error($con);
}
?>