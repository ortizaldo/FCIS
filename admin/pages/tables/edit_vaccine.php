<!DOCTYPE html>
<html>

<?php include('header.php');?>
<?php


error_reporting(0);
$id = $_GET['id'];
include '../../../config/db_config.php';

$sql = "SELECT * FROM vaccination where vac_id = '$id' ";
$result = $conn->query($sql);


if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
      $vac_id= $row['vac_id'];
    $date_vaccinate= $row['date_vaccinate'];
    $cock_id= $row['cock_id'];
    $injection= $row['injection'];
    $dosage_vac= $row['dosage_vac'];
    $descrip= $row['descrip'];
   
   
    }
} else {

}
$conn->close();

?>


<form class="form-horizontal row-fluid" action="../../action/update-vaccine.php" method="POST">
           <center>
           <h4>Vaccination Details</h4>     
      
                                  <div class="form-group form-float">
                                <div class="form-line">
                                   <input type="hidden" class="form-control show-tick" 
                           value = "<?php echo $vac_id  ?>" name = "id">
                      
                   
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
                        Date Vaccination: <input type="date"  value = "<?php echo $date_vaccine;  ?>" class="form-control" 
                         name="date_vaccinate" placeholder="date" 
                         >
                        </div>
                                </div>
                                <div class="form-group form-float">
                                <div class="form-line">
                        Name of Vaccine: <input type="text"  value = "<?php echo $injection;  ?>" class="form-control" 
                         name="injection" placeholder="Name of Vaccine" 
                         >
                        </div>
                                </div>
                                <div class="form-group form-float">
                                <div class="form-line">
                        Dosage: <input type="text"  value = "<?php echo $dosage_vac;  ?>" class="form-control" 
                         name="dosage_vac" placeholder="Dosage" 
                         >
                        </div>
                                </div>
                                <div class="form-group form-float">
                                <div class="form-line">
                        Vaccination Description: <input type="text"  value = "<?php echo $descrip;  ?>" class="form-control" 
                         name="descrip" placeholder="Vaccination Description" 
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