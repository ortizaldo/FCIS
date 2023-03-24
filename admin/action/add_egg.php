<?php 

include '../../config/db_config.php';


$id = $_POST['id'];
if ($id > 0) {
    $i = $id;
    while('') {
      $i++;
     $sql = "INSERT INTO breeders(breeder_id) VALUES ('$i')";

      header("location:../pages/tables/breed.php");
    }
} else {

}
$conn->close();

?>