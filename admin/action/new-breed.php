<?php

// Make a MySQL Connection
include '../../config/db_config.php';

 $father_bloodline = $_POST['father_bloodline'];
 $father = $_POST['father'];
  $descrip = $_POST['descrip'];
 $bloodline_r = $_POST['bloodline_r'];
  $mother_id = $_POST['mother_id'];
   $date = date('M-d-Y');


  $prim_id = $_POST['prim_id'];
 $fprim_id = $_POST['fprim_id'];
          $sql = "SELECT * FROM chickens where prim_id = '$prim_id' and type = 'Male' ";
          $result = $conn->query($sql);
          if ($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) {
            $image = $row['image'];

}}


   foreach($_POST['mother_id'] as $key => $val) {
    $mother_id  = $val;
    $mother_racist = $_POST['mother_racist'][$key];


	 $breeder_id = rand(100000,999999);
  $sql11 = "INSERT INTO breeders(breeder_id,breeder_m_id,breeder_f_id,father_bloodline,mother_bloodline,bloodline,date_breed,descrip) VALUES('$breeder_id', '$mother_id','$father','$father_bloodline','$mother_racist','$father_bloodline','$date','$descrip')";
   ($conn->query($sql11) === TRUE);
}

 $check=mysqli_query($conn,"select * from father where  prim_id = '$fprim_id' and prim_id='$prim_id'  ");
    $checkrows=mysqli_num_rows($check);
     if($checkrows>0) {
    header("location:../pages/tables/breed.php");
   } else {  
    $sql12 = "INSERT INTO father(father_id,father_racist,date_father,image,prim_id) VALUES('$father', '$father_bloodline','$date','$image','$prim_id')";
   ($conn->query($sql12) === TRUE);	
   }

$check1=mysqli_query($conn,"select * from mother where mother_id='$mother_id'");
    $checkrows1=mysqli_num_rows($check1);
     if($checkrows1>0) {
    header("location:../pages/tables/breed.php");
   } else {  
    $sql1 = "INSERT INTO mother(mother_id,date_transfered) VALUES('$mother_id','$date')";
   ($conn->query($sql1) === TRUE); 
   }
   header("location:../pages/tables/breed.php");
?>