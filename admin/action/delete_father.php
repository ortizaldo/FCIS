<?php
include 'check-login.php';
$father_id = $_GET['ref'];

include '../../config/db_config.php';

$sql = "DELETE FROM father WHERE father_id ='$father_id' ";

if ($conn->query($sql) === TRUE) {
   header("location:../pages/tables/father.php");
} else {
     header("location:../pages/tables/father.php");
}

$conn->close();

?>