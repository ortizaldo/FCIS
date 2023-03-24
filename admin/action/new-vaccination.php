<?php
include 'check-login.php';

include '../../config/db_config.php';



$cock = $_POST['cock'];
$date_vaccinate = $_POST['date_vaccinate'];
$injection = $_POST['injection'];
$dosage_vac = $_POST['dosage_vac'];
$descrip = $_POST['descrip'];
$month_year = date("m/Y"); 
$yr = date('Y');

$vac_id= 'S-'.rand(1000,9999).'';
include '../../config/db_config.php';

$sql = "INSERT INTO vaccination (vac_id, date_vaccinate,cock_id,injection, dosage_vac,descrip,yearly,month_year) VALUES ('$vac_id', '$date_vaccinate','$cock','$injection','$dosage_vac','$descrip','$yr','$month_year')";

if ($conn->query($sql) === TRUE) {

header("location:../pages/tables/vaccination.php");
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();




?>