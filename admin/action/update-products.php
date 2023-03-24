<?php
session_start();
$producttoedit = $_SESSION['producttoedit'];

$product_name = $_POST['product'];
$bprice = $_POST['buyingprice'];
$sprice = $_POST['sellingprice'];
$lowstock = $_POST['stocklevel'];
$opstock = $_POST['stock'];
$barcode = $_POST['barcode'];
$prodcate = $_POST['productcategory'];
$produnit = $_POST['productunit'];
$cust = $_POST['currentstock'];
$expired_date = $_POST['ex_date'];

include '../../config/db_config.php';

$sql = "UPDATE for_sale SET fs_name='$product_name', fs_buying_price='$bprice', fs_selling_price='$sprice', fs_stock_level='$lowstock', fs_open_Stock='$opstock', fs_current_stock='$cust',fs_category='$prodcate', fs_unit='$produnit', expiration_date = '$expired_date' WHERE fs_id='$producttoedit'";

if ($conn->query($sql) === TRUE) {
    header("location:../pages/tables/product.php");
} else {
     header("location:../pages/tables/product.php");
}

$conn->close();

?>