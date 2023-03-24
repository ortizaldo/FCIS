<?php
$path = $_FILES['image']['name'];
$filename = basename($path);
// $ext = pathinfo($path, PATHINFO_EXTENSION);
if($path){
$check = $_FILES['image']['tmp_name'];
$target_dir = "image/";
$target_file = $target_dir.basename($path);
if (file_exists($target_file)) {
$target_file = $target_file."'";
}
move_uploaded_file($check, $target_file);
}
include 'check-login.php';

  include '../../config/db_config.php';


	$racist = $_POST['racist'];
	$signs = $_POST['signs'];
    $weight = $_POST['weight'];
    $height = $_POST['height'];
    $father_descrip = $_POST['father_descrip'];
    $date_father = $_POST['date_father'];
    $age_father = $_POST['age_father'];
    $father_hist = $_POST['father_hist'];
     $owner_name = $_POST['owner_name'];
      $bloodlines = $_POST['bloodlines'];
       $win_t = $_POST['win_t'];
        $place = $_POST['place'];
         $date_hatched = $_POST['date_hatched'];
  
  $cage = $_POST['cage'];
  
	$father_id= 'S-'.rand(1000,9999).'';
  include '../../config/db_config.php';
  
  $sql = "INSERT INTO father (father_id,image,father_racist, signs, weight, height, date_father,age_father,father_descrip,cage,prim_id,father_hist,owner_name,bloodlines,win_t,place,date_hatched)
VALUES ('$father_id','$filename', '$racist', '$signs', '$weight','$height', '$date_father', '$age_father', '$father_descrip', '$cage','$father_id','$father_hist','$owner_name','$bloodlines','$win_t','$place','$date_hatched')";

if ($conn->query($sql) === TRUE) {
	
  header("location:../pages/tables/father.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();




?>