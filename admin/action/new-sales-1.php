<?php
include 'check-login.php';
$shop_timezone = $_SESSION['shoptimezone'];
date_default_timezone_set($shop_timezone);

$today =  ''.date('M').'-'.date('d').'-'.date('Y');
error_reporting(0);
$product1 = $_POST['product1'];


$ammount1 = $_POST['ammount1'];





if ($product1 == ""){
	$product1 = "NIL";
	$p1price = "0";
	$p1total = "0";
	$ammount1 = "0";
	$unit1 = "";

}else{
 include '../../config/db_config.php';
 $sql = "SELECT * FROM products WHERE shop_id = '$SEshopno' and name = '$product1'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
        $p1price = $row['selling_price'];
		$p1stock = $row['current_stock'];
		$p1total = $p1price * $ammount1;
		$newp1stock = $p1stock - $ammount1;
		$unit1 = $row['unit'];
		$sale1 = rand(100000,999999);
	 include '../../config/db_config.php';
	    $sql = "UPDATE products SET current_stock ='$newp1stock' WHERE shop_id = '$SEshopno' and name = '$product1'";
		if ($conn->query($sql) === TRUE) {
} else {
}
     include '../../config/db_config.php';
	    $sql = "INSERT INTO sales(sales_id, product_name, shop, price, amount, unit, total, date, signature)
        VALUES ('$sale1', '$product1', '$SEshopno', '$p1price', '$ammount1', '$unit1', '$p1total', '$today', '$SEshop_id')";
		if ($conn->query($sql) === TRUE) {

} else {

}
}

} else {

}
$conn->close();
	
}



$_SESSION['product1'] = $product1;
$_SESSION['price1'] = $p1price;
$_SESSION['ammount1'] = $ammount1;
$_SESSION['total1'] = $p1total;
$_SESSION['unit1'] = $unit1;


header("location:../sales_reciept_1.php");
?>


