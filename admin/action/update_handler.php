<?php
$id = $_POST['id'];
$handler = $_POST['handler'];
$contact_person = $_POST['contact_person'];
$contact_no = $_POST['contact_no'];
$address = $_POST['address'];

include '../../config/db_config.php';

$sql = "UPDATE handlers SET handler_name = '$handler', contact_person='$contact_person', contact_no='$contact_no', address='$address' WHERE handler_id ='$id'";

if ($conn->query($sql) === TRUE) {
    header("location:../pages/tables/handler.php");
} else {
     header("location:../pages/tables/handler.php");
}

$conn->close();

?>