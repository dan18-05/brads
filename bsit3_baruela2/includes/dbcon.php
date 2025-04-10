<?php
//DBASE CONNECTION
$con = mysqli_connect('localhost', 'root', '', 'bsit_3');

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "";
?>