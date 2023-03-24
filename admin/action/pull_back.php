<?php

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

include '../../config/db_config.php';

$sql = "INSERT INTO cocks (cock_id,cock_categories,father_bloodline,f_num_wins,f_num_loss, mother_bloodline,siblings,wins,losses,no_days,day_to_transfer)
VALUES ('$cock_id','$cock_categories', '$father_bloodline', '$f_num_wins', '$f_num_loss', '$mother_bloodline', '$siblings', '$wins', '$losses','$no_days','$day_to_transfer',)";


		if ($conn->query($sql) === TRUE) {

} else {

}



$sql = "DELETE FROM patient_cocks WHERE cock_id='$cock_id'";

if ($conn->query($sql) === TRUE) {
 header("location:../pages/tables/patient_cock.php?suc=suc");
} else {
  header("location:../pages/tables/patient_cock.php?err=err");
}

?>


