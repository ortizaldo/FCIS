<?php
include 'check-login.php';
include '../../config/db_config.php';

?>


<?php


include '../../config/db_config.php';
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
$id = $_POST['id'];
$c_id = 'ST-'.$id.'';
$cage = $_POST['cage'];
$chick_categories = "Stag";
$chick_father_id = $_POST['father_id'];
$chick_mother_id = $_POST['mother_id'];
$age = $_POST['age_chicks'];
 $no_days = $_POST['no_days'];
  $f_bloodline = $_POST['f_bloodline'];
  $type = $_POST['type'];
$father_id= 'S-'.rand(1000,9999).'';
 $date_transfered = ''.date('M').'-'.date('d').'-'.date('Y');
 $day_to_transfer = date('M-d-Y', strtotime($date_transfered. ' + 6 months'));

include '../../config/db_config.php';
$sql   = "SELECT * FROM chickens WHERE  chicken_id = '$id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {   
$sql = "UPDATE chickens SET chicken_categories='$chick_categories',prim_id='$id',chicken_father_id='$chick_father_id', chicken_mother_id='$chick_mother_id',age='$age', no_days='$no_days', day_to_transfer='$day_to_transfer', date_transfered='$date_transfered' , type='$type',cage='$cage',chicken_id='$c_id', image='$filename'  WHERE chicken_id='$id'";

}
		if ($conn->query($sql) === TRUE) {

} else {

}









	$sql1 = "INSERT INTO stag_his (chicken_id,chicken_categories,chicken_father_id,father_bloodline,chicken_mother_id,age,no_days,day_to_transfer,date_transfered,bloodline,prim_id,image)
VALUES ('$c_id','$chick_categories', ' $chick_father_id','$f_bloodline', '$chick_mother_id','$age','$no_days','$date_transfered','$no_days','$f_bloodline','$id','$filename')";

if ($conn->query($sql1) === TRUE) {
    header("location:../pages/tables/stugs.php?in=chick $chick_id have been registered");
} else {
   header('Location: '.$_SERVER['HTTP_REFERER']);}

$conn->close();

?>