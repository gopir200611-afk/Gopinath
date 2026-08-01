<?php
session_start();

if(!isset($_SESSION['admin'])){
    header("Location: login.php");
    exit;
}

include "db.php";

if(isset($_GET['id'])){

    $id = intval($_GET['id']);

    mysqli_query($conn,"DELETE FROM orders WHERE id='$id'");

    header("Location: dashboard.php");
    exit;
}
?>


<link rel="icon" href="favicon.ico" type="image/x-icon">