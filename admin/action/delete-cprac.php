<?php
include 'check-login.php';
$id = $_GET['ref'];

include '../../config/db_config.php';

$sql = "DELETE FROM cprac WHERE cprac_id ='$id'";

if ($conn->query($sql) === TRUE) {
   header("location:../pages/tables/cprac.php");
} else {
     header("location:../pages/tables/cprac.php");
}

$conn->close();

?>
