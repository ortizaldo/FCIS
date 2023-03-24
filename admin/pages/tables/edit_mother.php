<!DOCTYPE html>
<html>

<?php include('header.php');?>






<?php

error_reporting(0);
$id = $_GET['id'];
include '../../../config/db_config.php';

$sql = "SELECT * FROM mother where mother_id = '$id' ";
$result = $conn->query($sql);


if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
   
    $mother_id= $row['mother_id'];
    $mother_racist = $row['mother_racist'];
    $age_mother = $row['age_mother'];
    $image = $row['image'];
     $cage = $row['cage'];
   
    }
} else {

}
$conn->close();

?>


                         
                         <form class="form-horizontal row-fluid" action="../../action/update_mother.php" method="POST">
           <center>     
           <h3> Dam Information</h3>
                               <input type="hidden" class="form-control" name="id" value = "<?php echo $mother_id ?>">
                                  <div class="form-group form-float">
                                <div class="form-line">
                   
                              Mother Racist
                    
                           <input type="text" class="form-control show-tick" name = "racist"   autocomplete = "off" value = "<?php echo $mother_racist ?>" list="category">
                        <datalist id="category">
                        
                                <?php
                          include '../../../config/db_config.php';
                 
                                     $sql = "SELECT * FROM cock_categories  ORDER BY name";
                                                     $result = $conn->query($sql);
                                  
                                    if ($result->num_rows > 0) {
    
                                                   while($row = $result->fetch_assoc()) {
                                                       echo '<option value="'.$row['name'].'">'.$row['name'].'</option>';
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
                        Dam Age: <input type="text"  value = "<?php echo $age_mother;  ?>" class="form-control" 
                         name="age_mother" placeholder="Mother Age" 
                         >
                        </div>
                                </div>
                                     <div class="form-group form-float">
                                <div class="form-line">
                        Cage: <input type="text"  value = "<?php echo $cage;  ?>" class="form-control" 
                         name="cage" placeholder="Cage" 
                         >
                        </div>
                                </div>
                      
       
<div class="control-group">
    <div class="controls">
    <center>
           <button type="submit" class="btn">Update</button>
         
                                                            </center>
                                      </div>
                                      </div>
                                    </form>

            
            

    <!-- Jquery Core Js -->
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