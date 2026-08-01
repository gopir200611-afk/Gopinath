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

<title>Settings</title>

<link rel="stylesheet" href="admin.css">

</head>

<body>

<h1>Website Settings</h1>

<form>

<label>Website Name</label>

<input type="text" value=" SK GOPI VFX">

<br><br>

<label>Support Email</label>

<input type="email" value=" @skgopivfx.com">

<br><br>

<label>WhatsApp Number</label>

<input type="text" value="+911234567890">

<br><br>

<button type="submit">Save Settings</button>

</form>

</body>
</html>

<link rel="icon" href="favicon.ico" type="image/x-icon">