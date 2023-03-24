<?php

$id = $_POST['id'];
$cock_categories = $_POST['cock_categories'];
$father_bloodline = $_POST['father_bloodline'];
$f_num_wins = $_POST['f_num_wins'];
$f_num_loss = $_POST['f_num_loss'];
$mother_bloodline = $_POST['mother_bloodline'];
$siblings = $_POST['siblings'];
$wins = $_POST['wins'];
$loss = $_POST['loss'];
$no_days = $_POST['no_days'];
$day_to_transfer = $_POST['day_to_transfer'];


include '../../config/db_config.php';

$sql = "UPDATE cocks SET cock_categories='$cock_categories', father_bloodline='$father_bloodline', f_num_wins='$f_num_wins', f_num_loss='$f_num_loss', mother_bloodline='$mother_bloodline', siblings='$siblings',wins='$wins', losses='$loss', no_days = '$no_days',day_to_transfer = '$day_to_transfer',handler = '$handler' WHERE cock_id='$id'";

if ($conn->query($sql) === TRUE) {
    header("location:../pages/tables/cocks.php");
} else {
     header("location:../pages/tables/cocks.php");
}

$conn->close();

?>