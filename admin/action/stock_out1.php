<?php
include 'check-login.php';
$shop_timezone = $_SESSION['shoptimezone'];
date_default_timezone_set($shop_timezone);

error_reporting(0);
$product1 = $_POST['remove'];
$id = $_get['id'];
$id = $_POST['id'];
$todaydate =  ''.date('M').'-'.date('d').'-'.date('Y');

if ($product1 == ""){
	$product1 = "None";
	$p1price = "0";
	$p1total = "0";
	$ammount1 = "0";
	$unit1 = "";

}else{
 include '../../config/db_config.php';
 $sql = "SELECT * FROM products WHERE shop_id = '$SEshopno' and product_id = '$id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
		  $product_id = $row['product_id'];
        $p1price = $row['selling_price'];
		$stock_level = $row['stock_level'];
		$p1stock = $row['current_stock'];
		$p1total = $p1price * $ammount1;
		$newp1stock = $p1stock - $ammount1;
		$unit1 = $row['unit'];
		$expiration_date = $row['expiration_date'];
		$category = $row['category'];
		$sale1 = rand(100000,999999);
	 include '../../config/db_config.php';
	    $sql = "UPDATE products SET current_stock ='$newp1stock' WHERE shop_id = '$SEshopno' and name = '$product1'";
		if ($conn->query($sql) === TRUE) {
} else {
}
     include '../../config/db_config.php';
	    $sql = "INSERT INTO stock_out(product_id, name, selling_price, stock_level, current_stock, category, unit,expiration_date,date_remove, shop_id)
        VALUES ('$product_id','$product1', '$p1price','$stock_level ', '$p1stock ','$category','$unit1','$expiration_date','$todaydate','$SEshopno')";
		if ($conn->query($sql) === TRUE) {

} else {

}
}

	

$sql = "DELETE FROM products WHERE product_id='$product_id'";

if ($conn->query($sql) === TRUE) {
 header("location:../expired_stocks.php");
} else {
  header("location:../expired_stocks.php");
}
}
}
$_SESSION['product1'] = $product1;
$_SESSION['price1'] = $p1price;
$_SESSION['ammount1'] = $ammount1;
$_SESSION['total1'] = $p1total;
$_SESSION['unit1'] = $unit1;
$_SESSION['invoice'] = $invoice;
$_SESSION['id'] = $id;



?>


