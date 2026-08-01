<?php
include "db.php";

$id=$_GET['id'];

$result=mysqli_query($conn,"SELECT * FROM orders WHERE id='$id'");

$row=mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
<head>
<title>Invoice</title>

<style>

body{
font-family:Arial;
padding:40px;
}

table{
width:100%;
border-collapse:collapse;
}

td{
padding:10px;
border:1px solid #000;
}

</style>

</head>

<body>

<h1>SK GOPI VFX</h1>

<h2>Invoice</h2>

<table>

<tr>
<td>Order ID</td>
<td><?= $row['id']; ?></td>
</tr>

<tr>
<td>Name</td>
<td><?= $row['name']; ?></td>
</tr>

<tr>
<td>Phone</td>
<td><?= $row['phone']; ?></td>
</tr>

<tr>
<td>Service</td>
<td><?= $row['service']; ?></td>
</tr>

<tr>
<td>Status</td>
<td><?= $row['status']; ?></td>
</tr>

</table>

<br>

<button onclick="window.print()">
Print Invoice
</button>

</body>
</html>

<link rel="icon" href="favicon.ico" type="image/x-icon">