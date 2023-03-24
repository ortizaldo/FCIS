<?php
$id = $_POST['id'];
$cock = $_POST['cock'];
$date_cvacc = $_POST['date_cvacc'];
$injection = $_POST['injection'];
$dosage_vac = $_POST['dosage_vac'];
$descrip = $_POST['descrip'];
$cvacc_id = $_POST['cvacc_id'];

include '../../config/db_config.php';

$sql = "UPDATE cvacc SET cvacc_id='$cvacc_id',cock_id='$cock', date_cvacc='$date_cvacc', injection='$injection', dosage_vac='$dosage_vac', descrip='$descrip' WHERE cvacc_id ='$id'";

if ($conn->query($sql) === TRUE) {
    header("location:../pages/tables/cvacc.php");
} else {
     header("location:../pages/tables/cvacc.php");
}

$conn->close();

?>