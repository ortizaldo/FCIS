<?php
include 'check-login.php';
include '../../config/db_config.php';

?>


<?php


include '../../config/db_config.php';
error_reporting(0);

include '../../../config/db_config.php';
$id= $_POST['id'];

$sql = "SELECT * FROM chickens WHERE chicken_id = '$id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
$prim_id = $row['prim_id'];
$chicken_id = $row['chicken_id'];
}
}

include '../../config/db_config.php';

$chicken = $_POST['id'];
$bloodline = $_POST['bloodline'];
$place = $_POST['place'];
$weight  = $_POST['weight'];
$height  = $_POST['height'];
$injuries  = $_POST['injuries'];
$gaff  = $_POST['gaff'];
$obloodline  = $_POST['obloodline'];
$oowner  = $_POST['oowner'];
$oweight  = $_POST['oweight'];
$oheight  = $_POST['oheight'];
$ogaff  = $_POST['ogaff'];
$oinjuries  = $_POST['oinjure'];
$result  = $_POST['result'];
$event_type = $_POST['event_type'];
$date = $_POST['date'];
 $date_held = date('M-d-Y', strtotime($date));

include '../../config/db_config.php';

    	$sql = "INSERT INTO battles (chicken_id,place,event_type,date_held,bloodline,height,weight,injuries,gaff,obloodline,oowner,oweight,oheight,ogaff,oinjuries,result,prim_id)
VALUES ('$chicken','$place','$event_type','$date_held','$bloodline','$height','$weight','$injuries','$gaff','$obloodline','$oowner','$oweight','$oheight','$ogaff','$oinjuries','$result','$prim_id')";

if ($conn->query($sql) === TRUE) {


    header("location:../pages/tables/conditioning.php?battle=success");
} else {
    header("location:../pages/tables/conditioning.php?battle=error");
}

$conn->close();

?>