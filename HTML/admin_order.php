<?php
session_start();

if(!isset($_SESSION['admin'])){
header("Location:login.php");
exit;
}

include "db.php";

$search="";

if(isset($_GET['search'])){
$search=$_GET['search'];
$sql="SELECT * FROM orders
WHERE
name LIKE '%$search%'
OR phone LIKE '%$search%'
ORDER BY id DESC";
}else{
$sql="SELECT * FROM orders ORDER BY id DESC";
}

$result=mysqli_query($conn,$sql);
?>

<!DOCTYPE html>
<html>
<head>
<title>Manage Orders</title>
<link rel="stylesheet" href="admin.css">
</head>

<body>

<h1>Manage Orders</h1>

<form>

<input
type="text"
name="search"
placeholder="Search Name or Phone">

<button>Search</button>

</form>

<br>

<table>

<tr>

<th>ID</th>
<th>Name</th>
<th>Phone</th>
<th>Service</th>
<th>Status</th>

</tr>

<?php

while($row=mysqli_fetch_assoc($result)){

echo "

<tr>

<td>{$row['id']}</td>

<td>{$row['name']}</td>

<td>{$row['phone']}</td>

<td>{$row['service']}</td>

<td>{$row['status']}</td>

</tr>

";

}

?>

</table>

</body>
</html>

<link rel="icon" href="favicon.ico" type="image/x-icon">