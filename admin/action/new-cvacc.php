<?php
include 'check-login.php';

include '../../config/db_config.php';



$cock = $_POST['cock'];
$date_cvacc = $_POST['date_cvacc'];
$injection = $_POST['injection'];
$dosage_vac = $_POST['dosage_vac'];
$descrip = $_POST['descrip'];


$vac_id= 'S-'.rand(1000,9999).'';
include '../../config/db_config.php';

$sql = "INSERT INTO cvacc (cvacc_id, date_cvacc,cock_id, injection, dosage_vac,descrip) VALUES ('$cvacc_id', '$date_cvacc','$cock',  '$injection',  '$dosage_vac',  '$descrip')";

if ($conn->query($sql) === TRUE) {

header("location:../pages/tables/cvacc.php");
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();




?>