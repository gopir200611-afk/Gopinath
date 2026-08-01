<?php

include "db.php";

if(isset($_POST['restore'])){

$file=$_FILES['sql']['tmp_name'];

$sql=file_get_contents($file);

if(mysqli_multi_query($conn,$sql)){

echo "<script>alert('Database Restored Successfully');</script>";

}else{

echo "<script>alert('Restore Failed');</script>";

}

}

?>

<!DOCTYPE html>

<html>

<head>

<title>Restore Database</title>

<link rel="stylesheet" href="admin.css">

</head>

<body>

<h2>Restore Database</h2>

<form method="POST" enctype="multipart/form-data">

<input type="file" name="sql" required>

<br><br>

<button name="restore">

Restore Database

</button>

</form>

</body>

</html>

<link rel="icon" href="favicon.ico" type="image/x-icon">