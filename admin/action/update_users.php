<?php
$id = $_POST['id'];
$fullname = $_POST['fullname'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$gender = $_POST['gender'];
include '../../config/db_config.php';

$sql = "UPDATE users SET fullname = '$fullname', phone='$phone', email='$email',gender = '$gender' WHERE user_id ='$id'";

if ($conn->query($sql) === TRUE) {
    header("location:../pages/tables/user.php");
} else {
     header("location:../pages/tables/user.php");
}

$conn->close();

?>