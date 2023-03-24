 <?php
    


                     
include '../../config/db_config.php';

$egg = $_POST['egg'];
$id = $_POST['id'];



  while($i <= $egg) {
$i++;
$sql = "INSERT INTO eggs (breeder_id,num_of_egg)
VALUES ('$id','$egg')";

}




if ($conn->query($sql) === TRUE) {
    header("location:../pages/tables/breed.php");
} else {
    header("location:../pages/tables/breed.php");
}

$conn->close();

?>