<?php
include 'check-login.php';
$shopemail = $_POST['shopemail'];
$Shopphone = $_POST['shopphone'];
$shopadd = $_POST['shopaddress'];
$shopstrt = $_POST['shopstreet'];
$shopphon = $_POST['shopphone'];
$shoptimezone = $_POST['timezone'];
$shopname = $_POST['shopname'];
$owner_name = $_POST['owner_name'];
$owner_address = $_POST['owner_address'];



    include '../../config/db_config.php';
	$sql = "UPDATE shops SET shop_name = '$shopname', shop_email = '$shopemail', shop_timezone='$shoptimezone', shop_address = '$shopadd', shop_street = '$shopstrt', shop_phone = '$shopphon', owner_name = '$owner_name', owner_address = '$owner_address' WHERE shop_id='$SEshop_id'";

if ($conn->query($sql) === TRUE) {
    header("location:../");
} else {
     header("location:../");
}

$conn->close();