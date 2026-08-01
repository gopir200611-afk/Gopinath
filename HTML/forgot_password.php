<?php
session_start();

if(isset($_POST['reset'])){

$username=$_POST['username'];

if($username=="admin"){

echo "<script>alert('Default Password : admin123');</script>";

}else{

echo "<script>alert('Username Not Found');</script>";

}

}
?>

<!DOCTYPE html>
<html>
<head>
<title>Forgot Password</title>

<style>
body{
background:#111;
color:white;
font-family:Arial;
display:flex;
justify-content:center;
align-items:center;
height:100vh;
}

.box{
background:#222;
padding:30px;
border-radius:12px;
width:350px;
}

input,button{
width:100%;
padding:12px;
margin:10px 0;
}

button{
background:#00e5ff;
border:none;
cursor:pointer;
}
</style>

</head>

<body>

<div class="box">

<h2>Forgot Password</h2>

<form method="POST">

<input type="text" name="username" placeholder="Username" required>

<button name="reset">Reset Password</button>

</form>

</div>

</body>
</html>

<link rel="icon" href="favicon.ico" type="image/x-icon">