<?php
include 'check-login.php';

include '../../config/db_config.php';



$cock = $_POST['cock'];
$date = $_POST['date'];
$immune_type = $_POST['immune_type'];
$dosage_immune = $_POST['dosage_immune'];
$descrip = $_POST['descrip'];
$month_year = date("m/Y"); 
$yr = date('Y');

$immune_id= 'S-'.rand(1000,9999).'';
include '../../config/db_config.php';

$sql = "INSERT INTO immune (immune_id, immune_date, cock_id, immune_type, dosage_immune,descrip,yearly,month_year) VALUES ('$immune_id', '$date','$cock','$immune_type',  '$dosage_immune','$descrip','$yr','$month_year')";

if ($conn->query($sql) === TRUE) {

header("location:../pages/tables/immune.php");
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();




?>