<?php
$id = $_POST['id'];
$racist = $_POST['racist'];
$age_mother = $_POST['age_mother'];
$cage = $_POST['cage'];
include '../../config/db_config.php';

$sql = "UPDATE mother SET mother_racist = '$racist', age_mother = '$age_mother', cage = '$cage' WHERE mother_id ='$id'";

if ($conn->query($sql) === TRUE) {
    header("location:../pages/tables/mother.php");
} else {
     header("location:../pages/tables/mother.php");
}

$conn->close();

?>