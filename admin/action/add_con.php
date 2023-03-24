<?php
include 'check-login.php';
include '../../config/db_config.php';

?>


<?php


include '../../config/db_config.php';


$chick_id =  $_POST['chicken'];
$place = $_POST['place'];
$event_type = $_POST['event_type'];
$date = $_POST['date'];

include '../../config/db_config.php';





$sql = "INSERT INTO conditioning(cock_id,place,event_type,event_date)
VALUES ('$chick_id','$place','$event_type','$date')";

if ($conn->query($sql) === TRUE) {


    header("location:../pages/tables/conditioning.php?in=chick $chick_id have been registered");
} else {
    header("location:../pages/tables/conditioning.php?err=Could not register chick $chick_id");
}

$conn->close();

?>