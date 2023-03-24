<?php
include 'check-login.php';
$id = $_GET['ref'];

include '../../config/db_config.php';

$sql = "DELETE FROM chickens WHERE chicken_id ='$id'";

if ($conn->query($sql) === TRUE) {
   header("location:../pages/tables/cocks.php?success=success");
} else {
     header("location:../pages/tables/cocks.php?failed=failed");
}

$conn->close();

?>