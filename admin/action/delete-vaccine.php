<?php
include 'check-login.php';
$id = $_GET['ref'];

include '../../config/db_config.php';

$sql = "DELETE FROM vaccination WHERE vac_id ='$id'";

if ($conn->query($sql) === TRUE) {
   header("location:../pages/tables/vaccination.php");
} else {
     header("location:../pages/tables/vaccination.php");
}

$conn->close();

?>