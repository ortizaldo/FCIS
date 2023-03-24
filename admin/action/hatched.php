<?php

// Make a MySQL Connection
include '../../config/db_config.php';
$checked_arr = $_POST['mother_id'];
$count = count($checked_arr);


 $mother_id = $_POST['mother_id']; 
$breeder_id = $_POST['breeder_id']; 
$breeder_m_id = $_POST['breeder_m_id']; 
$date = date('M-d-Y');
$sql1 = "SELECT * FROM eggs where breeder_id = '$breeder_id'";
$result = $conn->query($sql1);

if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
        $num_egg = $row['num_of_egg'];
  
     
$sql2 = "UPDATE eggs  SET num_of_egg ='0' WHERE breeder_id ='$breeder_id'";
  ($conn->query($sql2) === TRUE);  

}} 




$sql4 = "SELECT * FROM batch where breeder_id = '$breeder_id'";
$result = $conn->query($sql4);

if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
        $batch_no = $row['batch_no'];

         $batched =  $batch_no + 1;
  
     }
     $sql41 = "UPDATE batch SET batch_no ='$batched' WHERE breeder_id ='$breeder_id'";
  ($conn->query($sql41) === TRUE);  
 }else{
   $batched = 1;
   $sql42 = "INSERT INTO batch(batch_no,mother_id,breeder_id) VALUES('$batched','$breeder_m_id','$breeder_id')";
   ($conn->query($sql42) === TRUE);
 }


 $sql5 = "INSERT INTO batch(unhatched_no,mother_id,breeder_id) VALUES('$total','$breeder_m_id','$breeder_id')";
   ($conn->query($sql5) === TRUE);



 
 $total =   $num_egg - $count;
 $batch_id = 'Batched-'.$batched.'-'.$breeder_m_id.'';
 $sql3 = "INSERT INTO unhatched(unhatched_no,mother_id,breeder_id,batch) VALUES('$total','$breeder_m_id','$breeder_id','$batch_id')";
   ($conn->query($sql3) === TRUE);






   
foreach($_POST["mother_id"] as $mother_id)
{

  $sql6 = "INSERT INTO hatch(hatch_id,date_hatch,breeder_id,mother_id,batch) VALUES('$mother_id','$date','$breeder_id','$breeder_m_id','$batch_id')";
   ($conn->query($sql6) === TRUE);
}

 
   header("location:../pages/tables/hatched_batch.php");
?>