<?php
$id = $_POST['id'];
$cock = $_POST['cock'];
$cprac_date = $_POST['cprac_date'];
$descrip = $_POST['descrip'];
$cprac_id = $_POST['cprac_id'];

include '../../config/db_config.php';

$sql = "UPDATE cprac SET cprac_id='$cprac_id',cock_id='$cock', cprac_date='$cprac_date', descrip='$descrip' WHERE cprac_id ='$id'";

if ($conn->query($sql) === TRUE) {
    header("location:../pages/tables/cprac.php");
} else {
     header("location:../pages/tables/cprac.php");
}

$conn->close();

?>