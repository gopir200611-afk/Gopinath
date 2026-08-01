<?php
include "db.php";

$total = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM orders"));
$pending = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM orders WHERE status='Pending'"));
$completed = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM orders WHERE status='Completed'"));
?>

<!DOCTYPE html>
<html>
<head>
<title>Analytics</title>
<link rel="stylesheet" href="admin.css">
</head>

<body>

<h1>Analytics Dashboard</h1>

<div class="card">
<h2>Total Orders</h2>
<h1><?php echo $total; ?></h1>
</div>

<div class="card">
<h2>Pending Orders</h2>
<h1><?php echo $pending; ?></h1>
</div>

<div class="card">
<h2>Completed Orders</h2>
<h1><?php echo $completed; ?></h1>
</div>

</body>
</html>


<link rel="icon" href="favicon.ico" type="image/x-icon">