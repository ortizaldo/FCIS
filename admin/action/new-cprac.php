<?php
include 'check-login.php';

include '../../config/db_config.php';



$cock = $_POST['cock'];
$cprac_date = $_POST['cprac_date'];
$descrip = $_POST['descrip'];



$vac_id= 'S-'.rand(1000,9999).'';
include '../../config/db_config.php';

$sql = "INSERT INTO cprac (cprac_id, cprac_date,cock_id, descrip) VALUES ('$cprac_id', '$cprac_date','$cock',  '$descrip')";

if ($conn->query($sql) === TRUE) {

header("location:../pages/tables/cprac.php");
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();




?>