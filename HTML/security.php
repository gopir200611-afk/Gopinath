<?php

function clean($data){
    return htmlspecialchars(strip_tags(trim($data)));
}

function isAdmin(){

session_start();

if(!isset($_SESSION['admin'])){

header("Location:login.php");

exit();

}

}

?>

<link rel="icon" href="favicon.ico" type="image/x-icon">