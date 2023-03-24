<?php
include 'check-login.php';
include '../../config/db_config.php';

?>


<?php


include '../../config/db_config.php';


$chick_id= 'C-'.rand(1000,9999).'';
$type = "dam" ;
$bloodline = $_POST['bloodline'];
$born_day = $_POST['no_days'];
 $no_days = date('M-d-Y', strtotime($born_day));
$handler = $_POST['handler'];
include '../../config/db_config.php';





$sql = "INSERT INTO chickens (chicken_id,bloodline,no_days,handler,type)
VALUES ('$chick_id','$bloodline', '$no_days', '$handler','$type')";

if ($conn->query($sql) === TRUE) {


    header("location:../pages/tables/breed.php?in=chick $chick_id have been registered");
} else {
    header("location:../pages/tables/breed.php?err=Could not register chick $chick_id");
}

$conn->close();

?>