<?php
$id = $_POST['id'];
$cock = $_POST['cock'];
$date_vaccinate = $_POST['date_vaccinate'];
$injection = $_POST['injection'];
$dosage_vac = $_POST['dosage_vac'];
$descrip = $_POST['descrip'];
$vac_id = $_POST['vac_id'];

include '../../config/db_config.php';

$sql = "UPDATE vaccination SET vac_id='$vac_id',cock_id='$cock', date_vaccinate='$date_vaccinate', injection='$injection', dosage_vac='$dosage_vac', descrip='$descrip' WHERE vac_id ='$id'";

if ($conn->query($sql) === TRUE) {
    header("location:../pages/tables/vaccination.php");
} else {
     header("location:../pages/tables/vacciantion.php");
}

$conn->close();

?>