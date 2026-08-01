<?php
include "db.php";

$result = mysqli_query($conn,"SELECT * FROM orders WHERE status='Pending' ORDER BY id DESC");
?>

<!DOCTYPE html>
<html>
<head>
<title>Pending Orders</title>
<link rel="stylesheet" href="admin.css">
</head>

<body>

<h1>Pending Orders</h1>

<table>

<tr>
<th>ID</th>
<th>Name</th>
<th>Phone</th>
<th>Service</th>
<th>Date</th>
</tr>

<?php
while($row=mysqli_fetch_assoc($result)){
?>

<tr>

<td><?= $row['id']; ?></td>
<td><?= $row['name']; ?></td>
<td><?= $row['phone']; ?></td>
<td><?= $row['service']; ?></td>
<td><?= $row['created_at']; ?></td>

</tr>

<?php } ?>

</table>

</body>
</html>



<link rel="icon" href="favicon.ico" type="image/x-icon">