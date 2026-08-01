<?php
session_start();

if(!isset($_SESSION['admin'])){
    header("Location:login.php");
    exit;
}

include "db.php";

if(isset($_POST['upload'])){

$id = $_POST['id'];

$file = $_FILES['edited_file']['name'];

$tmp = $_FILES['edited_file']['tmp_name'];

move_uploaded_file($tmp,"completed/".$file);

mysqli_query($conn,"
UPDATE orders
SET
status='Completed',
file='$file'
WHERE id='$id'
");

echo "<script>
alert('Completed File Uploaded');
location='dashboard.php';
</script>";

}
?>

<!DOCTYPE html>
<html>
<head>
<title>Upload Edited File</title>
<link rel="stylesheet" href="admin.css">
</head>

<body>

<h2>Upload Edited File</h2>

<form method="POST" enctype="multipart/form-data">

<input
type="number"
name="id"
placeholder="Order ID"
required>

<br><br>

<input
type="file"
name="edited_file"
required>

<br><br>

<button
name="upload">
Upload
</button>

</form>

</body>
</html>


<link rel="icon" href="favicon.ico" type="image/x-icon">