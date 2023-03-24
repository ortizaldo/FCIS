<?php
include 'check-login.php';
$id = $_GET['ref'];

include '../../config/db_config.php';

$sql = "DELETE FROM feed WHERE feed_id ='$id'";

if ($conn->query($sql) === TRUE) {
   header("location:../pages/tables/feeding.php");
} else {
     header("location:../pages/tables/feeding.php");
}

$conn->close();

?>