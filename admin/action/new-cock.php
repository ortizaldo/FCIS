<?php
include 'check-login.php';
include '../../config/db_config.php';
$cock_categories = $_POST['cock_categories'];

$sql = "SELECT * FROM product_categories WHERE name = '$cock_categories'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     $sql = "INSERT INTO cock_categories(name, shop) VALUES ('$cock_categories', '$shop')";

    
} else {
}
$conn->close();







?>


<?php


include '../../config/db_config.php';


$cock_id= 'C-'.rand(1000,9999).'';
$cock_categories = $_POST['cock_categories'];
$father_bloodline = $_POST['father_bloodline'];
$f_num_wins = $_POST['f_num_wins'];
$f_num_loss = $_POST['f_num_loss'];
$mother_bloodline = $_POST['mother_bloodline'];
$no_days = $_POST['no_days'];
$day_to_transfer = $_POST['day_to_transfer'];

include '../../config/db_config.php';




$sql = "INSERT INTO cocks (cock_id,cock_categories,father_bloodline,f_num_wins,f_num_loss, mother_bloodline,no_days,day_to_transfer)
VALUES ('$cock_id','$cock_categories', '$father_bloodline', '$f_num_wins', '$f_num_loss', '$mother_bloodline','$no_days','$day_to_transfer')";

if ($conn->query($sql) === TRUE) {
    header("location:../pages/tables/cocks.php?in=Product $product_name have been registered");
} else {
    header("location:../pages/tables/cocks.php?err=Could not register product $product_name");
}

$conn->close();

?>