<?php

$id = $_POST['id'];

$chick_categories = $_POST['chick_categories'];
$chick_father_id = $_POST['father_id'];
$chick_mother_id = $_POST['mother_id'];
$age_chicks = $_POST['age_chicks'];
 $no_days = date('M-d-Y');
$type = $_POST['type'];
 $day_to_transfer = date('M-d-Y', strtotime($no_days. ' + 6 months'));


include '../../config/db_config.php';


$sql = "UPDATE chickens SET chicken_categories='$chick_categories',chicken_father_id='$chick_father_id', chicken_mother_id='$chick_mother_id',age_chicks='$age_chicks', no_days='$no_days', day_to_transfer='$day_to_transfer', type='$type' WHERE chicken_id='$id'";

if ($conn->query($sql) === TRUE) {
    header("location:../pages/tables/chicks.php");
} else {
     header("location:../pages/tables/chicks.php");
}

$conn->close();

?>