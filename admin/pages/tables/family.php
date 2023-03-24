<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Family Tree of Chicken</title>
  
  
  
      <link rel="stylesheet" href="family_css/style.css">

  
</head>

<body>
<?php


error_reporting(0);
$id = $_GET['id'];
include '../../../config/db_config.php';

$sql = "SELECT * FROM breeders where breeder_id = '$id' ";
$result = $conn->query($sql);


if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
      $breeder_id= $row['breeder_id'];
    $breeder_f_id= $row['breeder_f_id'];
    $breeder_m_id= $row['breeder_m_id'];
    $date_breed= $row['date_breed'];
   
   
    }
} else {

}
$conn->close();

?>
<div class="tree">
  <ul>
    <li>
      <a href="#">Father: <?php echo $breeder_f_id ?></a>--
      --<a href="#">Mother: <?php echo  $breeder_m_id ?></a>
      <ul>
     
        <li>
          <a href="#">Child: <?php echo $breeder_id  ?></a>
          <ul>
           
            <li>
              <a href="#">Grand Child :hahah coming soon</a>
              <ul>
                <li>
                  <a href="#">Great Grand Child:</a>
                </li>
                <li>
                  <a active href="#">Great Grand Child:</a>
                </li>
                <li>
                  <a href="#">Great Grand Child:</a>
                </li>
              </ul>
            </li>
      
          </ul>
        </li>
      </ul>
    </li>
  </ul>
</div>
  
  

    <script  src="family/js/index.js"></script>




</body>

</html>
