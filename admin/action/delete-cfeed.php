<?php
include 'check-login.php';
$id = $_GET['ref'];

include '../../config/db_config.php';

$sql = "DELETE FROM cfeed WHERE cfeed_id ='$id'";

if ($conn->query($sql) === TRUE) {
   header("location:../pages/tables/cfeed.php");
} else {
     header("location:../pages/tables/cfeed.php");
}

$conn->close();

?>
