<?php
include "db.php";

$result=mysqli_query($conn,"SELECT * FROM orders ORDER BY created_at DESC");
?>

<!DOCTYPE html>
<html>
<head>
<title>Reports</title>
<link rel="stylesheet" href="admin.css">
</head>

<body>

<h1>Order Report</h1>

<table>

<tr>

<th>ID</th>
<th>Name</th>
<th>Service</th>
<th>Status</th>
<th>Date</th>

</tr>

<?php

while($row=mysqli_fetch_assoc($result)){

echo "<tr>";

echo "<td>".$row['id']."</td>";
echo "<td>".$row['name']."</td>";
echo "<td>".$row['service']."</td>";
echo "<td>".$row['status']."</td>";
echo "<td>".$row['created_at']."</td>";

echo "</tr>";

}

?>

</table>

</body>
</html>


<link rel="icon" href="favicon.ico" type="image/x-icon">