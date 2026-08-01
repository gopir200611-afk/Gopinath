<?php
session_start();

if(isset($_POST['login'])){

$username=$_POST['username'];
$password=$_POST['password'];

if($username=="admin" && $password=="admin123"){

$_SESSION['admin']=true;

header("Location:dashboard.php");

}else{

echo "<script>alert('Invalid Login');</script>";

}

}
?>

<!DOCTYPE html>
<html>
<head>
<title>Admin Login</title>

<style>

body{
background:#111;
font-family:Arial;
display:flex;
justify-content:center;
align-items:center;
height:100vh;
color:white;
}

.login{
background:#222;
padding:30px;
border-radius:15px;
width:350px;
}

input{
width:100%;
padding:12px;
margin:10px 0;
border:none;
border-radius:8px;
}

button{
width:100%;
padding:12px;
background:#00e5ff;
border:none;
cursor:pointer;
font-size:18px;
}

</style>

</head>

<body>

<div class="login">

<h2>Admin Login</h2>

<form method="POST">

<input type="text" name="username" placeholder="Username" required>

<input type="password" name="password" placeholder="Password" required>

<button name="login">Login</button>

</form>

</div>

</body>
</html>

<link rel="icon" href="favicon.ico" type="image/x-icon">