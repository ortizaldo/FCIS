<?php
include 'check-login.php';
$category = $_POST['category'];

include '../../config/db_config.php';
$sql = "SELECT * FROM cock_categories WHERE name = '$category'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
      header("location:../pages/tables/cock_category.php?err=Product category already exist");
    }
} else {
$sql = "INSERT INTO cock_categories (name, shop)
VALUES ('$category', '$SEshopno')";

if ($conn->query($sql) === TRUE) {
   header("location:../pages/tables/cock_category.php");
} else {
   header("location:../pages/tables/cock_category.php");
}

$conn->close();
}
?>