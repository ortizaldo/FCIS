<?php
include 'check-login.php';
$id = $_GET['ref'];

include '../../config/db_config.php';
$sql = "SELECT * FROM chickens WHERE prim_id = '$id'";
$result = $conn->query($sql);


if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
    $chick_id = $row['chicken_id'];
       $age = $row['age'];
      $chick_categories = $row['chicken_categories'];
      $father_id = $row['chicken_father_id'];
    $father_bloodline = $row['father_bloodline'];
 $mother_id = $row['chicken_mother_id'];
    $mother_bloodline = $row['mother_bloodline'];
  
      $day_to_transfer = $row['day_to_transfer'];
    $no_days = $row['no_days'];
    $batch = $row['batch'];
      $cage = $row['cage'];
        $gender = $row['type'];
    $date_died = ''.date('M').'-'.date('d').'-'.date('Y');
    
    }
} 
  $sql1 = "INSERT INTO died (chicken_id,batch,cage,chicken_categories,chicken_father_id,father_bloodline,chicken_mother_id,age,no_days,date_died,bloodline,prim_id,gender)
VALUES ('$chick_id','$batch','$cage','$chick_categories','$father_id','$father_bloodline', '$mother_id','$age','$no_days','$date_died','$father_bloodline','$id','$gender')";
if ($conn->query($sql1) === TRUE) {
  

} else {
  
}
$sql2 = "DELETE FROM chickens WHERE prim_id ='$id'";

if ($conn->query($sql2) === TRUE) {
   header("location:../pages/tables/died.php?success=success");
} else {
     header('Location: '.$_SERVER['HTTP_REFERER']);
}

$conn->close();

?>