<?php
include 'check-login.php';
$id = $_GET['ref'];

include '../../config/db_config.php';

$sql = "DELETE FROM cvacc WHERE cvacc_id ='$id'";

if ($conn->query($sql) === TRUE) {
   header("location:../pages/tables/cvacc.php");
} else {
     header("location:../pages/tables/cvacc.php");
}

$conn->close();

?>
