<?php
include "db.php";

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$service = $_POST['service'];
$details = $_POST['details'];

$fileName = "";

if(isset($_FILES['files']) && $_FILES['files']['name'][0] != ""){

    $fileName = time()."_".$_FILES['files']['name'][0];

    move_uploaded_file(
        $_FILES['files']['tmp_name'][0],
        "uploads/".$fileName
    );
}

$sql = "INSERT INTO orders
(name,email,phone,service,details,file)
VALUES
('$name','$email','$phone','$service','$details','$fileName')";

if(mysqli_query($conn,$sql)){
    echo "<h2>Order Submitted Successfully!</h2>";
}else{
    echo "Error : ".mysqli_error($conn);
}

mysqli_close($conn);
?>

<link rel="icon" href="favicon.ico" type="image/x-icon">