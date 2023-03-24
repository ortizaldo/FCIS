<?php
include 'check-login.php';

include '../../config/db_config.php';



$cock = $_POST['cock'];
$deworm_date = $_POST['deworm_date'];
$deworm_type = $_POST['deworm_type'];
$usage_deworm = $_POST['usage_deworm'];
$descrip = $_POST['descrip'];
$month_year = date("m/Y"); 
$yr = date('Y');
$deworm_id= 'S-'.rand(1000,9999).'';
include '../../config/db_config.php';

$sql = "INSERT INTO deworm (deworm_id, deworm_date,cock_id, deworm_type, usage_deworm,descrip,yearly,month_year) VALUES ('$deworm_id', '$deworm_date','$cock',  '$deworm_type',  '$usage_deworm','$descrip','$yr','$month_year')";

if ($conn->query($sql) === TRUE) {

header("location:../pages/tables/deworming.php");
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();




?>