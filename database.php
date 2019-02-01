<?php

$server   = "localhost";
$database = "journalists";
$username = "root";
$password = "";
$conn = mysqli_connect("localhost", "root", "", "journalists");

if (!$conn) {
echo "Error: Unable to connect to database. ";
echo "Debugging errno: " . mysqli_connect_errno();
echo "Debugging error: " . mysqli_connect_error();
exit;
}

 ?>
