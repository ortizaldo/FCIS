<?php

include '../../config/db_config.php';
$product_id = $_GET['id'];
$sql = "DELETE FROM products WHERE product_id='$product_id'";

if ($conn->query($sql) === TRUE) {
   header("location:../pages/tables/product.php");
} else {
    header("location:../pages/tables/product.php");
}

$conn->close();

?>