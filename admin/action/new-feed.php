<?php
include 'check-login.php';

include '../../config/db_config.php';



$cock = $_POST['cock'];
$date = $_POST['date'];
$type_feed = $_POST['type_feed'];
$descrip = $_POST['descrip'];
$month_year = date("m/Y"); 
$yr = date('Y');

$feed_id= 'S-'.rand(1000,9999).'';
include '../../config/db_config.php';

$sql = "INSERT INTO feed (feed_id, feed_date,cock_id,type_feed,descrip,yearly,month_year) VALUES ('$feed_id', '$date','$cock', '$type_feed', '$descrip','$yr','$month_year')";

if ($conn->query($sql) === TRUE) {

header("location:../pages/tables/feeding.php");
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();




?>