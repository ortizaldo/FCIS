<?php
include 'check-login.php';
$mother_id = $_GET['ref'];

include '../../config/db_config.php';

$sql = "DELETE FROM mother WHERE mother_id ='$mother_id' ";

if ($conn->query($sql) === TRUE) {
   header("location:../pages/tables/mother.php");
} else {
     header("location:../pages/tables/mother.php");
}

$conn->close();

?>