<?php
include 'check-login.php';
include '../../config/db_config.php';

?>


<?php


include '../../config/db_config.php';


$chick_id= 'C-'.rand(1000,9999).'';
$chick_categories = "Chicks";
$father_id = $_POST['father_id'];
$mother_id = $_POST['mother_id'];
$age_chicks = $_POST['age_chicks'];

$mother_bloodline = $_POST['mother_bloodline'];
$father_bloodline = $_POST['father_bloodline'];
$born_day = $_POST['no_days'];
 $no_days = date('M-d-Y', strtotime($born_day));

 $day_to_transfer = date('M-d-Y', strtotime($no_days. ' + 6 months'));

include '../../config/db_config.php';





$sql = "INSERT INTO chickens (chicken_id,chicken_categories,chicken_father_id,father_bloodline,chicken_mother_id,mother_bloodline,age,no_days,day_to_transfer,date_transfered,bloodline)
VALUES ('$chick_id','$chick_categories', '$father_id','$father_bloodline', '$mother_id','$mother_bloodline','$age_chicks','$no_days','$day_to_transfer','$no_days','$father_bloodline')";

if ($conn->query($sql) === TRUE) {


    header("location:../pages/tables/chicks.php?success=$chick_id");
} else {
    header("location:../pages/tables/chicks.php?err=$chick_id");
}

$conn->close();

?>