<?php
include 'check-login.php';
$user = $_POST['username'];
$new_pass = base64_encode($_POST['password']);

include '../../config/db_config.php';

$sql = "UPDATE shops SET shop_password='$new_pass' , shop_username = '$user' WHERE shop_id='$SEshop_id'";

if ($conn->query($sql) === TRUE) {
   header("location:../index.php");
} else {
   header("location:../index.php");
}

$conn->close();

?>
 