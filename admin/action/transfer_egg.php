<?php
include 'check-login.php';
include '../../config/db_config.php';

?>


<?php


include '../../config/db_config.php';
$breeder_id = $_POST['breeder_id'];

         $sql = "SELECT * FROM breeders where breeder_id = '$breeder_id'";
                                 $result = $conn->query($sql);

                                 if ($result->num_rows > 0) {
                                   while($row = $result->fetch_assoc()) {
                                  $breeder_f = $row['breeder_f_id'];
                                  $breeder_m = $row['breeder_m_id'];
                                  $father_bloodline = $row['father_bloodline'];


                                   }}





$chick_id= $_POST['id'];
$breeder_id = $_POST['breeder_id'];
$chick_categories = "Chicks";
$age = $_POST['age_chicks'];

$born_day =  date('M-d-Y');
 $no_days = date('M-d-Y', strtotime($born_day));

 $day_to_transfer = date('M-d-Y', strtotime($no_days. ' + 6 months'));


 include '../../config/db_config.php';
$sql = "SELECT * FROM eggs where breeder_id = '$breeder_id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
        $num_egg = $row['num_of_egg'];
      $minus = 1;
      $total =   $num_egg - $minus;
$sql3 = "UPDATE eggs  SET num_of_egg ='$total' WHERE breeder_id ='$breeder_id'";
  ($conn->query($sql3) === TRUE);  

}}

    $sql4 = "INSERT INTO chickens (chicken_id,chicken_categories,chicken_father_id,father_bloodline,chicken_mother_id,mother_bloodline,age,no_days,day_to_transfer,date_transfered,bloodline)
VALUES ('$chick_id','$chick_categories', ' $breeder_f','$father_bloodline', '$breeder_m','$mother_bloodline','$age','$no_days','$day_to_transfer','$no_days','$father_bloodline')";
  ($conn->query($sql4) === TRUE);  

$sql5 = "INSERT INTO chicks_his (chicken_id,chicken_categories,chicken_father_id,father_bloodline,chicken_mother_id,mother_bloodline,age,no_days,day_to_transfer,date_transfered,bloodline)
VALUES ('$chick_id','$chick_categories', ' $breeder_f','$father_bloodline', '$breeder_m','$mother_bloodline','$age','$no_days','$day_to_transfer','$no_days','$father_bloodline')";
  ($conn->query($sql5) === TRUE);  

    header("location:../pages/tables/chicks.php?success=$chick_id");
?>