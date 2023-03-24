<?php
$cage_id= 'T-'.rand(1000,9999).'';
$cock_id =  $_GET['cock_id'];
$cock_categories =  $_GET['cock_categories'];
$father_bloodline =  $_GET['father_bloodline'];
$f_num_wins = $_GET['f_num_wins'];
$f_num_loss = $_GET['f_num_loss'];
$mother_bloodline = $_GET['mother_bloodline'];
$siblings =  $_GET['siblings'];
$wins =  $_GET['wins'];
$losses = $_GET['losses'];
$no_days = $_GET['no_days'];
$day_to_transfer = $_GET['day_to_transfer'];

$todaydate = ''.date('M').'-'.date('d').'-'.date('Y');
include '../../config/db_config.php';

$sql = "INSERT INTO conditioning (cock_id,cock_categories,father_bloodline,f_num_wins,f_num_loss, mother_bloodline,siblings,wins,losses,no_days,day_to_transfer,date_transfered,cage_id)
VALUES ('$cock_id','$cock_categories', '$father_bloodline', '$f_num_wins', '$f_num_loss', '$mother_bloodline', '$siblings', '$wins', '$losses','$no_days','$day_to_transfer','$todaydate','$cage_id')";


		if ($conn->query($sql) === TRUE) {

} else {

}



$sql = "DELETE FROM cocks WHERE cock_id='$cock_id'";

if ($conn->query($sql) === TRUE) {
 header("location:../pages/tables/transfer_cage.php?suc=suc");
} else {
  header("location:../pages/tables/transfer_cage.php?err=err");
}

?>


