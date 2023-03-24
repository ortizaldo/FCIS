<?php

$id = $_POST['id'];

$chick_categories = $_POST['chick_categories'];
$chick_father_id = $_POST['father_id'];
$chick_mother_id = $_POST['mother_id'];
$age = $_POST['age'];
$no_days = $_POST['no_days'];
$day_to_transfer = $_POST['day_to_transfer'];
include '../../config/db_config.php';


$sql = "UPDATE chickens SET chicken_categories='$chick_categories',chicken_father_id='$chick_father_id', chicken_mother_id='$chick_mother_id',age='$age', no_days='$no_days', day_to_transfer='$day_to_transfer' WHERE chicken_id='$id'";

if ($conn->query($sql) === TRUE) {
    header("location:../pages/tables/stugs.php");
} else {
     header("location:../pages/tables/stugs.php");
}

$conn->close();

?>