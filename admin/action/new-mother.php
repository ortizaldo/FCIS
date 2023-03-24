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

$cage = $_POST['cage'];
	$racist = $_POST['racist'];
	$age_mother = $_POST['age_mother'];
	$image = $_POST['filename'];
	$date_mother = $_POST['date_mother'];
  
	$mother_id= 'S-'.rand(1000,9999).'';
  include '../../config/db_config.php';
  
  $sql = "INSERT INTO mother (mother_id,image,mother_racist,age_mother,date_transfered,cage)
VALUES ('$mother_id','$filename', '$racist','$age_mother','$date_mother','$cage')";

if ($conn->query($sql) === TRUE) {
	
  header("location:../pages/tables/mother.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();




?>