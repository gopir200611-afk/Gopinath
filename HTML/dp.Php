<?php

$host = "localhost";
$user = "root";
$password = "";
$database = " sk_gopi_vfx";

$conn = mysqli_connect($host, $user, $password, $database);

if (!$conn) {
    die("Database Connection Failed: " . mysqli_connect_error());
}

?>

<link rel="icon" href="favicon.ico" type="image/x-icon">