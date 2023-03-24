<?php
include 'check-login.php';
$breeder_id = $_GET['ref'];

include '../../config/db_config.php';

$sql = "DELETE FROM breeders WHERE breeder_id ='$breeder_id' ";

if ($conn->query($sql) === TRUE) {
   header("location:../pages/tables/breed.php");
} else {
     header("location:../pages/tables/breed.php");
}

$conn->close();

?>