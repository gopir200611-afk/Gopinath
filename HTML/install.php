<?php

$host="localhost";
$user="root";
$password="";
$database="skgopi_vfx";

$conn=mysqli_connect($host,$user,$password);

if(!$conn){
die("Connection Failed");
}

mysqli_query($conn,"CREATE DATABASE IF NOT EXISTS $database");

mysqli_select_db($conn,$database);

$sql="CREATE TABLE IF NOT EXISTS orders(
id INT AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(100),
email VARCHAR(100),
phone VARCHAR(20),
service VARCHAR(100),
details TEXT,
file VARCHAR(255),
status VARCHAR(30) DEFAULT 'Pending',
created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";

mysqli_query($conn,$sql);

if(!is_dir("uploads")){
mkdir("uploads");
}

if(!is_dir("completed")){
mkdir("completed");
}

echo "<h2>SK GOPI VFX Installed Successfully</h2>";

echo "<a href='index.php'>Open Website</a>";

?>

<link rel="icon" href="favicon.ico" type="image/x-icon">