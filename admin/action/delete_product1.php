<?php
$product = $_GET['ref'];
include '../../config/db_config.php';

$sql = "DELETE FROM for_sale WHERE fs_id='$product'";

if ($conn->query($sql) === TRUE) {
   header("location:../pages/tables/product.php");
} else {
    header("location:../pages/tables/product.php");
}

$conn->close();

?>