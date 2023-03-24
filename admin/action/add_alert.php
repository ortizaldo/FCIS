<?php
include 'check-login.php';
include '../../config/db_config.php';

?>


<?php


include '../../config/db_config.php';

$type = $_POST['type'];
$time = $_POST['time'];
include '../../config/db_config.php';





$sql = "INSERT INTO alerts (type,atime)
VALUES ('$type','$time')";

if ($conn->query($sql) === TRUE) {


 header('Location: '.$_SERVER['HTTP_REFERER']);
} else {
   header('Location: '.$_SERVER['HTTP_REFERER']);
}

$conn->close();

?>