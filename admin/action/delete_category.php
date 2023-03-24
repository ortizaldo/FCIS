<?php
include 'check-login.php';
$id = $_GET['ref'];

include '../../config/db_config.php';

$sql = "DELETE FROM cock_categories WHERE id ='$id' and shop = '$SEshopno'";

if ($conn->query($sql) === TRUE) {
   header("location:../pages/tables/cock_category.php");
} else {
     header("location:../pages/tables/cock_category.php");
}

$conn->close();

?>