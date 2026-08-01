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
<title>Track Order</title>

<style>
body{
    background:#111;
    color:#fff;
    font-family:Arial;
}

.box{
    width:400px;
    margin:80px auto;
    background:#222;
    padding:30px;
    border-radius:12px;
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

.result{
    margin-top:20px;
    background:#333;
    padding:15px;
    border-radius:8px;
}
</style>

</head>

<body>

<div class="box">

<h2>Track Your Order</h2>

<form method="POST">

<input type="number" name="id" placeholder="Enter Order ID" required>

<button name="search">Track</button>

</form>

<?php if($order){ ?>

<div class="result">

<p><b>Name:</b> <?php echo $order['name']; ?></p>

<p><b>Service:</b> <?php echo $order['service']; ?></p>

<p><b>Status:</b> <?php echo $order['status']; ?></p>

<p><b>Date:</b> <?php echo $order['created_at']; ?></p>

</div>

<?php } ?>

</div>

</body>
</html>


<link rel="icon" href="favicon.ico" type="image/x-icon">