<?php
include 'check-login.php';
$product_id = 'f-'.$SEshopno. '-'.rand(100000,999999).'';
$product_name = $_POST['product'];
$bprice = $_POST['buyingprice'];
$sprice = $_POST['sellingprice'];
$lowstock = $_POST['stocklevel'];
$opstock = $_POST['stock'];
$prodcate = $_POST['productcategory'];
$produnit = $_POST['productunit'];
$exdate = $_POST['ex_date'];
$todaydate = ''.date('m').'-'.date('d').'-'.date('Y');
include '../../config/db_config.php';

$sql = "INSERT INTO for_sale (fs_id, shop_id, fs_name, fs_buying_price, fs_selling_price, fs_stock_level, fs_open_stock, fs_current_stock,fs_category, fs_unit,expiration_date)
VALUES ('$product_id', '$SEshopno', '$product_name', '$bprice', '$sprice', '$lowstock', '$opstock', '$opstock', '$prodcate', '$produnit', '$exdate')";

if ($conn->query($sql) === TRUE) {
    header("location:../pages/tables/products.php?in=Product $product_name have been registered");
} else {
    header("location:../pages/tables/products.php?err=Could not register product $product_name");
}

$conn->close();

?>