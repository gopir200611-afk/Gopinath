<?php

include "db.php";

$backup="backup_".date("Ymd_His").".sql";

header("Content-Type: application/sql");
header("Content-Disposition: attachment; filename=$backup");

$result=mysqli_query($conn,"SELECT * FROM orders");

while($row=mysqli_fetch_assoc($result)){

echo "INSERT INTO orders
(id,name,email,phone,service,details,file,status,created_at)
VALUES(
'{$row['id']}',
'{$row['name']}',
'{$row['email']}',
'{$row['phone']}',
'{$row['service']}',
'{$row['details']}',
'{$row['file']}',
'{$row['status']}',
'{$row['created_at']}'
);\n";

}

?>




<link rel="icon" href="favicon.ico" type="image/x-icon">