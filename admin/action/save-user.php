<?php
	$id = $_POST['id'];
    $phone = $_POST['phone'];
	$fname = $_POST['fullname'];
	$gender = $_POST['gender'];
	$email = $_POST['email'];
  include '../../config/db_config.php';
  
$sql = "UPDATE users SET fullname ='$fname', email = '$email', gender = '$gender', phone = '$phone' WHERE user_id = '$id' ";

if ($conn->query($sql) === TRUE) {
    header("location:../user.php");
} else {
    header("location:../user.php");
}

?>