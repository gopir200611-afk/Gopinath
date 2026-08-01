<?php

include "db.php";

$q=$_GET['q'];

$result=mysqli_query($conn,"
SELECT *
FROM orders
WHERE
name LIKE '%$q%'
OR phone LIKE '%$q%'
OR service LIKE '%$q%'
");

while($row=mysqli_fetch_assoc($result)){

echo "<p>";

echo $row['id']." | ";

echo $row['name']." | ";

echo $row['service']." | ";

echo $row['status'];

echo "</p>";

}

?>

<link rel="icon" href="favicon.ico" type="image/x-icon">