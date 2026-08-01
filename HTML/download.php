<?php
include "db.php";

$order = null;

if(isset($_POST['search'])){

    $id = intval($_POST['id']);

    $result = mysqli_query($conn,"SELECT * FROM orders WHERE id='$id'");
    $order = mysqli_fetch_assoc($result);
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Download Edited File</title>

<style>
body{
    background:#111;
    color:white;
    font-family:Arial;
}

.box{
    width:400px;
    margin:80px auto;
    background:#222;
    padding:30px;
    border-radius:10px;
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

a.download{
    display:block;
    margin-top:20px;
    background:green;
    color:white;
    text-decoration:none;
    text-align:center;
    padding:12px;
    border-radius:8px;
}
</style>

</head>

<body>

<div class="box">

<h2>Download Completed File</h2>

<form method="POST">

<input type="number" name="id" placeholder="Order ID" required>

<button name="search">Search</button>

</form>

<?php
if($order){

if($order['status']=="Completed"){

echo '<a class="download" href="completed/'.$order['file'].'" download>Download Edited File</a>';

}else{

echo "<p>Order is not completed yet.</p>";

}

}
?>

</div>

</body>
</html>


<link rel="icon" href="favicon.ico" type="image/x-icon">