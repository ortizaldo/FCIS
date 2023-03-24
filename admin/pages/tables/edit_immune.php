<!DOCTYPE html>
<html>

<?php include('header.php');?>
<?php


error_reporting(0);
$id = $_GET['id'];
include '../../../config/db_config.php';

$sql = "SELECT * FROM immune where immune_id = '$id' ";
$result = $conn->query($sql);


if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
      $immune_id= $row['immune_id'];
    $immune_date= $row['immune_date'];
    $cock_id= $row['cock_id'];
    $immune_type= $row['immune_type'];
    $dosage_immune= $row['dosage_immune'];
   
   
    }
} else {

}
$conn->close();

?>


<form class="form-horizontal row-fluid" action="../../action/update-immune.php" method="POST">
           <center>     
      
                                  <div class="form-group form-float">
                                <div class="form-line">
                                   <input type="hidden" class="form-control show-tick" 
                           value = "<?php echo $immune_id  ?>" name = "id">
                      
                   
                              Cock ID

                    
                           <input type="text" class="form-control show-tick" 
                           value = "<?php echo $cock_id  ?>" name = "cock"   autocomplete = "off" list="father">
                        <datalist id="father">
                        
                                <?php
                          include '../../../config/db_config.php';
                 
                                     $sql = "SELECT * FROM cocks";
                                                     $result = $conn->query($sql);
                                  
                                    if ($result->num_rows > 0) {
    
                                                   while($row = $result->fetch_assoc()) {
                                                       echo '<option value="'.$row['cock_id'].'">'.$row['cock_id'].'</option>';
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
                        Date of Immunization: <input type="date"  value = "<?php echo $immune_date;  ?>" class="form-control" 
                         name="date" placeholder="date" 
                         >
                        </div>
                                </div>
                                <div class="form-group form-float">
                                <div class="form-line">
                        Name of Drug: <input type="text"  value = "<?php echo $immune_type;  ?>" class="form-control" 
                         name="immune_type" placeholder="Name of Drug" 
                         >
                        </div>
                                </div>
                                <div class="form-group form-float">
                                <div class="form-line">
                        Dosage: <input type="text"  value = "<?php echo $dosage_immune;  ?>" class="form-control" 
                         name="dosage_immune" placeholder="Dosage" 
                         >
                        </div>
                                </div>
                                <div class="form-group form-float">
                                <div class="form-line">
                        Immunization Description: <input type="text"  value = "<?php echo $descrip;  ?>" class="form-control" 
                         name="descrip" placeholder="Immunization Description" 
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