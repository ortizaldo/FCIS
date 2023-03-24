<?php
include 'check-login.php';
$id = $_GET['ref'];

include '../../config/db_config.php';

$sql = "DELETE FROM immune WHERE immune_id ='$id'";

if ($conn->query($sql) === TRUE) {
   header("location:../pages/tables/immune.php");
} else {
     header("location:../pages/tables/immune.php");
}

$conn->close();

?>