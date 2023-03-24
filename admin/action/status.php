<?php 

$chick_id = $_POST['chick_id'];
$weight = $_POST['weight'];
$speed = $_POST['speed'];
$performance = $_POST['performance'];
$date = date('M-d-Y');


include '../../config/db_config.php';
   $sql = "INSERT INTO status(weight,speed,performance,cock_id,date) VALUES('$weight','$speed','$performance','$chick_id','$date')";
      if ($conn->query($sql) === TRUE) {

} 
       header("location:../pages/tables/conditioning.php");

 ?>