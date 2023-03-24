<!DOCTYPE html>
<html>

<?php include('header.php');?>






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
    $date_breed= $row['date_breeed'];
    $racist= $row['racist'];
    $image = $row['image'];
   
   
    }
} else {

}
$conn->close();

?>


<form class="form-horizontal row-fluid" action="../../action/update-breed.php" method="POST">
           <center>     
      
                                  <div class="form-group form-float">
                                <div class="form-line">
                                   <input type="hidden" class="form-control show-tick" 
                           value = "<?php echo $breeder_id  ?>" name = "id">
                      
                   
                              Father

                    
                           <input type="text" class="form-control show-tick" 
                           value = "<?php echo $breeder_f_id  ?>" name = "father"   autocomplete = "off" list="father">
                        <datalist id="father">
                        
                                <?php
                          include '../../../config/db_config.php';
                 
                                     $sql = "SELECT * FROM father";
                                                     $result = $conn->query($sql);
                                  
                                    if ($result->num_rows > 0) {
    
                                                   while($row = $result->fetch_assoc()) {
                                                       echo '<option value="'.$row['father_id'].'">'.$row['father_id'].'</option>';
                                                         }
                                                    } else {
  
                                                      }
                                                       $conn->close();
                          ?>
                        </datalist>
                   
                        </div>
                                </div>
                                            <div class="form-group form-float">
                                <div class="form-line">
                   
                             Mother
                    
                           <input type="text" class="form-control show-tick" name = "mother"   autocomplete = "off"   value = "<?php echo $breeder_m_id  ?>" list="mother">
                        <datalist id="mother">
                        
                                <?php
                          include '../../../config/db_config.php';
                 
                                     $sql = "SELECT * FROM mother";
                                                     $result = $conn->query($sql);
                                  
                                    if ($result->num_rows > 0) {
    
                                                   while($row = $result->fetch_assoc()) {
                                                       echo '<option value="'.$row['mother_id'].'">'.$row['mother_id'].'</option>';
                                                         }
                                                    } else {
  
                                                      }
                                                       $conn->close();
                          ?>
                        </datalist>
                   
                        </div>
                                </div>
                                        <div class="form-group form-float">
                                <div class="form-line">
                        Date breed: <input type="date"  value = "<?php echo $date_breeed;  ?>" class="form-control" 
                         name="date" placeholder="date" 
                         >
                        </div>
                                </div>
                                <div class="form-group-float">
                                <div class-"form-line">
                                <input class="form-control" placeholder="Racist" type="text" name="racist" >
                                  
                                </div> 
                                </div>
                                <div class="form-group-float">
                                <div class-"form-line">
                                <input class="filestyle" type="file" name="image" data-input="false">
                                  
                                </div> 
                                </div>
        
<div class="control-group">
    <div class="controls">
    <center>
           <button type="submit" class="btn">Add</button>
         
                                                            </center>
                                      </div>
                                      </div>
                                    </form>
                             </center>     
                     

  <script src="../../plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="../../plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="../../plugins/node-waves/waves.js"></script>

    <!-- Validation Plugin Js -->
    <script src="../../plugins/jquery-validation/jquery.validate.js"></script>

    <!-- Custom Js -->
 <script src="../../js/demo.js"></script>
        <script src="../../js/admin.js"></script>
    <script src="../../js/pages/forms/advanced-form-elements.js"></script>
    <script src="../../js/pages/examples/sign-in.js"></script>
    
</body>

</html>