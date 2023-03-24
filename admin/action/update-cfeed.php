<?php
$id = $_POST['id'];
$cock = $_POST['cock'];
$cfeed_date = $_POST['cfeed_date'];
$type_cfeed = $_POST['type_cfeed'];
$descrip = $_POST['descrip'];
$cfeed_id = $_POST['cfeed_id'];

include '../../config/db_config.php';

$sql = "UPDATE cfeed SET cfeed_id='$cfeed_id',cock_id='$cock', cfeed_date='$cfeed_date', type_cfeed='$type_cfeed', descrip='$descrip' WHERE cfeed_id ='$id'";

if ($conn->query($sql) === TRUE) {
    header("location:../pages/tables/cfeed.php");
} else {
     header("location:../pages/tables/cfeed.php");
}

$conn->close();

?>