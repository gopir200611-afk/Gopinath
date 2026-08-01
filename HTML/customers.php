<?php
include "db.php";

$result=mysqli_query($conn,"SELECT DISTINCT name,email,phone FROM orders");
?>

<!DOCTYPE html>
<html>
<head>
<title>Customers</title>
<link rel="stylesheet" href="admin.css">
</head>

<body>

<h1>Customers</h1>

<table>

<tr>
<th>Name</th>
<th>Email</th>
<th>Phone</th>
</tr>

<?php

while($row=mysqli_fetch_assoc($result)){

echo "<tr>";

echo "<td>".$row['name']."</td>";
echo "<td>".$row['email']."</td>";
echo "<td>".$row['phone']."</td>";

echo "</tr>";

}

?>

</table>

</body>
</html>

<link rel="icon" href="favicon.ico" type="image/x-icon">