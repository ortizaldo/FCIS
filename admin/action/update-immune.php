<?php
$id = $_POST['id'];
$cock = $_POST['cock'];
$date = $_POST['date'];
$immune_type = $_POST['immune_type'];
$dosage_immune = $_POST['dosage_immune'];
$descrip = $_POST['descrip'];
$immune_id = $_POST['immune_id'];

include '../../config/db_config.php';

$sql = "UPDATE immune SET immune_id='$immune_id',cock_id='$cock', immune_date='$date', immune_type='$immune_type', dosage_immune='$dosage_immune', descrip='$descrip' WHERE immune_id ='$id'";

if ($conn->query($sql) === TRUE) {
    header("location:../pages/tables/immune.php");
} else {
     header("location:../pages/tables/immune.php");
}

$conn->close();

?>