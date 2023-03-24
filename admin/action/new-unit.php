<?php
include 'check-login.php';
$unit = $_POST['unit'];
include '../../config/db_config.php';

$sql = "SELECT * FROM product_units WHERE name = '$unit'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
      header("location:../pages/tables/product_unit.php?err=Product unit already exist");
    }
} else {
$sql = "INSERT INTO product_units (name, shop)
VALUES ('$unit', '$SEshopno')";

if ($conn->query($sql) === TRUE) {
   header("location:../pages/tables/product_unit.php");
} else {
   header("location:../pages/tables/product_unit.php");
}
}
$conn->close();

?>