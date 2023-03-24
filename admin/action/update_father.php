<?php
$id = $_POST['id'];
$racist = $_POST['racist'];
$signs = $_POST['signs'];
$weight = $_POST['weight'];
$height = $_POST['height'];
$date_father = $_POST['date_father'];
$age_father = $_POST['age_father'];
$father_descrip = $_POST['father_descrip'];

$cage = $_POST['cage'];



include '../../config/db_config.php';

$sql = "UPDATE father SET father_racist = '$racist', signs='$signs',height='$height', weight='$weight',  date_father='$date_father', age_father='$age_father', cage='$cage', father_descrip='$father_descrip' WHERE father_id ='$id'";

if ($conn->query($sql) === TRUE) {
    header("location:../pages/tables/father.php");
} else {
     header("location:../pages/tables/father.php");
}

$conn->close();

?>