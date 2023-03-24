<?php
include '../../../../config/db_config.php';
include '../../../action/check-login.php';
$shop_timezone = $_SESSION['shoptimezone'];
date($shop_timezone);




$todaydate =  ''.date('M').'-'.date('d').'-'.date('Y');

$today = date('d');
$month = date('M');
$yr = date('Y');
include '../../../../config/db_config.php';
$sql = "SELECT * FROM sales  WHERE shop = '$SEshopno' and date = '$todaydate' ORDER BY total DESC LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	$mysum22 = 0;
 $mysum2=mysqli_num_rows($result);
    while($row = $result->fetch_assoc()) {
      $pname = $row['product_name'];
    }
} else {
$pname = "None";
}
$conn->close();

include '../../../../config/db_config.php';
$sql = "SELECT * FROM sales  WHERE shop = '$SEshopno' and date = '$todaydate' ORDER BY total DESC LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	$mysum22 = 0;
 $mysum2=mysqli_num_rows($result);
    while($row = $result->fetch_assoc()) {
      $pname = $row['product_name'];
    }
} else {
$pname = "None";
}
$conn->close();







?>