<?php
session_start();

if(!isset($_SESSION['admin'])){
header("Location:login.php");
exit;
}

include "db.php";

$result=mysqli_query($conn,"SELECT * FROM orders ORDER BY id DESC");

?>

<!DOCTYPE html>
<html>
<head>

<title>Dashboard</title>

<style>

body{
background:#111;
font-family:Arial;
color:white;
padding:20px;
}

table{
width:100%;
border-collapse:collapse;
}

th,td{
padding:12px;
border:1px solid #333;
text-align:center;
}

th{
background:#00e5ff;
color:black;
}

a{
color:#00e5ff;
text-decoration:none;
}

</style>

</head>

<body>

<h2>Customer Orders</h2>

<a href="logout.php">Logout</a>

<br><br>

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

echo "<tr>

<td>".$row['id']."</td>

<td>".$row['name']."</td>

<td>".$row['phone']."</td>

<td>".$row['service']."</td>

<td>".$row['status']."</td>

</tr>";

}

?>

</table>

</body>
</html>

<?php
session_start();

if(!isset($_SESSION['admin'])){
    header("Location:login.php");
    exit;
}

include "db.php";

$result = mysqli_query($conn,"SELECT * FROM orders ORDER BY id DESC");
?>

<!DOCTYPE html>
<html>
<head>
<title>Admin Dashboard</title>
<link rel="stylesheet" href="admin.css">
</head>

<body>

<h1>GOPI VFX Admin Dashboard</h1>

<a class="logout" href="logout.php">Logout</a>

<table>

<tr>
<th>ID</th>
<th>Name</th>
<th>Phone</th>
<th>Service</th>
<th>Status</th>
<th>Action</th>
</tr>

<?php while($row=mysqli_fetch_assoc($result)){ ?>

<tr>

<td><?= $row['id']; ?></td>
<td><?= $row['name']; ?></td>
<td><?= $row['phone']; ?></td>
<td><?= $row['service']; ?></td>
<td><?= $row['status']; ?></td>

<td>

<a class="complete"
href="update_status.php?id=<?= $row['id']; ?>">
Complete
</a>

<a class="delete"
href="delete_order.php?id=<?= $row['id']; ?>"
onclick="return confirm('Delete this order?')">
Delete
</a>

</td>

</tr>

<?php } ?>

</table>

</body>
</html>

<link rel="icon" href="favicon.ico" type="image/x-icon">