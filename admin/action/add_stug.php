<?php
include 'check-login.php';
include '../../config/db_config.php';

?>


<?php


include '../../config/db_config.php';

$chick_id= 'C-'.rand(1000,9999).'';
$chick_categories = "Stug";
$father_id = $_POST['father_id'];
$mother_id = $_POST['mother_id'];
$age = $_POST['age'];
 $no_days = date('M-d-Y', strtotime($born_day));

 $day_to_transfer = date('M-d-Y', strtotime($no_days. ' + 6 months'));

include '../../config/db_config.php';




$sql = "INSERT INTO stugs (stug_id,stug_categories,stug_father_id,stug_mother_id,age,no_days,day_to_transfer)
VALUES ('$chick_id','$chick_categories', '$father_id', '$mother_id','$age','$no_days','$day_to_transfer')";

if ($conn->query($sql) === TRUE) {
    header("location:../pages/tables/chicks.php?in=chick $chick_id have been registered");
} else {
    header("location:../pages/tables/chicks.php?err=Could not register chick $chick_id");
}

$conn->close();

?>