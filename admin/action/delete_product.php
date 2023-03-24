<?php
$product = $_GET['ref'];
include '../../config/db_config.php';

$sql = "DELETE FROM products WHERE product_id='$product'";

if ($conn->query($sql) === TRUE) {
   header("location:../pages/tables/products.php");
} else {
    header("location:../pages/tables/products.php");
}

$conn->close();

?>