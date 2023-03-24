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

$id= $_POST['id'];
$prim_id = $_POST['prim_id'];
$c_id = 'C-'.$prim_id.'';
$chick_categories = "Cocks";
$chick_father_id = $_POST['father_id'];
$chick_mother_id = $_POST['mother_id'];
$age = $_POST['age'];

 $no_days = $_POST['no_days'];

 $date_transfered = ''.date('M').'-'.date('d').'-'.date('Y');
 $day_to_transfer = date('M-d-Y', strtotime($date_transfered. ' + 6 months'));

include '../../config/db_config.php';




$sql = "UPDATE chickens SET chicken_categories='$chick_categories',chicken_father_id='$chick_father_id', chicken_mother_id='$chick_mother_id',age='$age', no_days='$no_days', day_to_transfer='$day_to_transfer', date_transfered='$date_transfered',chicken_id='$c_id', image='$filename'  WHERE chicken_id='$id'";


if ($conn->query($sql) === TRUE) {
}
 else {

}


	$sql1 = "INSERT INTO cock_his (chicken_id,chicken_categories,chicken_father_id,father_bloodline,chicken_mother_id,age,no_days,day_to_transfer,date_transfered,bloodline,prim_id,image)
VALUES ('$c_id','$chick_categories', ' $chick_father_id','$f_bloodline', '$chick_mother_id','$age','$no_days','$date_transfered','$no_days','$f_bloodline','$id','$filename')";

if ($conn->query($sql1) === TRUE) {
    header("location:../pages/tables/cocks.php?in=chicken $id have been registered");
} else {
   header('Location: '.$_SERVER['HTTP_REFERER']);
}

$conn->close();

?>