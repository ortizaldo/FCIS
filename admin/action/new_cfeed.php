<?php
include 'check-login.php';

include '../../config/db_config.php';



$cock = $_POST['cock'];
$cfeed_date = $_POST['cfeed_date'];
$type_cfeed = $_POST['type_cfeed'];
$descrip = $_POST['descrip'];


$feed_id= 'S-'.rand(1000,9999).'';
include '../../config/db_config.php';

$sql = "INSERT INTO cfeed (cfeed_id, cfeed_date,cock_id, type_cfeed,descrip) VALUES ('$cfeed_id', '$cfeed_date','$cock', '$type_cfeed', '$descrip')";

if ($conn->query($sql) === TRUE) {

header("location:../pages/tables/cfeed.php");
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();




?>