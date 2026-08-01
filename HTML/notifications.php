<?php
include "db.php";

$total=mysqli_num_rows(mysqli_query($conn,"SELECT * FROM orders"));

$pending=mysqli_num_rows(mysqli_query($conn,"SELECT * FROM orders WHERE status='Pending'"));

$completed=mysqli_num_rows(mysqli_query($conn,"SELECT * FROM orders WHERE status='Completed'"));
?>

<!DOCTYPE html>
<html>
<head>
<title>Notifications</title>

<link rel="stylesheet" href="admin.css">

</head>

<body>

<h1>Notifications</h1>

<div class="card">

<h2>Total Orders</h2>

<p><?php echo $total; ?></p>

</div>

<div class="card">

<h2>Pending Orders</h2>

<p><?php echo $pending; ?></p>

</div>

<div class="card">

<h2>Completed Orders</h2>

<p><?php echo $completed; ?></p>

</div>

</body>
</html>

<link rel="icon" href="favicon.ico" type="image/x-icon">