<?php
session_start();

if(!isset($_SESSION['admin'])){
header("Location:login.php");
exit;
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Admin Profile</title>
<link rel="stylesheet" href="admin.css">
</head>

<body>

<h1>Admin Profile</h1>

<table>

<tr>
<th>Username</th>
<td>admin</td>
</tr>

<tr>
<th>Role</th>
<td>Administrator</td>
</tr>

<tr>
<th>Website</th>
<td> SK GOPI VFX</td>
</tr>

</table>

<br>

<a class="complete" href="dashboard.php">Dashboard</a>

</body>
</html>

<link rel="icon" href="favicon.ico" type="image/x-icon">