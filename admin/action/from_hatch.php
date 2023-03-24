<?php 

$link = mysqli_connect('localhost:3306','root','','breeders') or die("Could not connect");
	mysqli_set_charset($link,"utf8");
	include '../../config/db_config.php';
	$breeder_id = $_POST['breeder_id'];

         $sql = "SELECT * FROM breeders where breeder_id = '$breeder_id'";
                                 $result = $conn->query($sql);

                                 if ($result->num_rows > 0) {
                                   while($row = $result->fetch_assoc()) {
                                  $breeder_f = $row['breeder_f_id'];
                                  $breeder_m = $row['breeder_m_id'];
                                  $father_bloodline = $row['father_bloodline'];
                                   $descrip = $row['descrip'];
                                    $father_bloodline = $row['father_bloodline'];
                                   }}
$born_day =  date('M-d-Y');
 $no_days = date('M-d-Y', strtotime($born_day));
$chick_categories = "Chicks";
 $day_to_transfer = date('M-d-Y', strtotime($no_days. ' + 6 months'));

if (isset($_POST['delete'])) {

foreach($_POST["id_hatch"] as $id)
{
	
$sql1= "DELETE FROM `hatch` WHERE hatch_id = '$id'";
  $result = mysqli_query($link,$sql1);
  
header('Location: '.$_SERVER['HTTP_REFERER']);
}

}



if (isset($_POST['transfer'])) {

foreach($_POST['hatch_id'] as $key => $val) {
    $hatch_id  = $val;
    $batch = $_POST['batch'][$key];


$sql2 = "INSERT INTO chickens (chicken_id,chicken_categories,chicken_father_id,father_bloodline,chicken_mother_id,no_days,day_to_transfer,date_transfered,bloodline,batch,prim_id)
VALUES ('$hatch_id','$chick_categories', '$breeder_f','$father_bloodline','$breeder_m','$no_days','$day_to_transfer','$no_days','$descrip','$batch','$hatch_id')";
  ($conn->query($sql2) === TRUE);  

}

foreach($_POST['hatch_id'] as $key => $val) {
    $hatch_id  = $val;
    $batch = $_POST['batch'][$key];
$sql21 = "INSERT INTO chicks_his(chicken_id,chicken_categories,chicken_father_id,father_bloodline,chicken_mother_id,no_days,day_to_transfer,date_transfered,bloodline,prim_id)
VALUES ('$hatch_id','$chick_categories', ' $breeder_f','$father_bloodline', '$breeder_m','$no_days','$day_to_transfer','$no_days','$descrip','$hatch_id')";

  ($conn->query($sql21) === TRUE);  

}


foreach($_POST["id_hatch"] as $id)
{
  
$sql123= "DELETE FROM `hatch` WHERE hatch_id = '$id'";
  $result = mysqli_query($link,$sql123);
  

}
  $result = mysqli_query($link,$sql3);
   header("location:../pages/tables/chicks.php?success=$chick_id");



}







 ?>