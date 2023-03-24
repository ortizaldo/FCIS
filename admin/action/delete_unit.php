<?php
include 'check-login.php';
$category = $_GET['ref'];

include '../../config/db_config.php';

$sql = "DELETE FROM product_units WHERE name ='$category' and shop = '$SEshopno'";

if ($conn->query($sql) === TRUE) {
   header("location:../pages/tables/product_unit.php");
} else {
     header("location:../pages/tables/product_unit.php");
}

$conn->close();

?>