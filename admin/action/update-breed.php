<?php
$id = $_POST['id'];
$mother = $_POST['mother'];
$father = $_POST['father'];
$date = $_POST['date'];
$image = $_POST['image'];
$racist = $_POST['racist'];

include '../../config/db_config.php';

$sql = "UPDATE breeders SET breeder_f_id='$father',breeder_m_id='$mother',date_breed='$date',racist='$racist',image='$image' WHERE breeder_id ='$id'";

if ($conn->query($sql) === TRUE) {
    header("location:../pages/tables/breed.php");
} else {
     header("location:../pages/tables/breed.php");
}

$conn->close();

?>