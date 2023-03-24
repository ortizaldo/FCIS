<?php
include 'check-login.php';
$handler_id = $_GET['ref'];

include '../../config/db_config.php';

$sql = "DELETE FROM handlers WHERE handler_id ='$handler_id' and shop = '$SEshopno'";

if ($conn->query($sql) === TRUE) {
   header("location:../pages/tables/handler.php");
} else {
     header("location:../pages/tables/handler.php");
}

$conn->close();

?>