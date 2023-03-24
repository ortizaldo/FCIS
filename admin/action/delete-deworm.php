<?php
include 'check-login.php';
$id = $_GET['ref'];

include '../../config/db_config.php';

$sql = "DELETE FROM deworm WHERE deworm_id ='$id'";

if ($conn->query($sql) === TRUE) {
   header("location:../pages/tables/deworming.php");
} else {
     header("location:../pages/tables/deworming.php");
}

$conn->close();

?>