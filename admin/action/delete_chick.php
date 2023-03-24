<?php
include 'check-login.php';
$id = $_GET['ref'];

include '../../config/db_config.php';

$sql = "DELETE FROM chickens WHERE chicken_id ='$id'";

if ($conn->query($sql) === TRUE) {
   header("location:../pages/tables/chicks.php?suc_deleted=$id");
} else {
     header("location:../pages/tables/chicks.php?failed=failed");
}

$conn->close();

?>