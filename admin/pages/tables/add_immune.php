<!DOCTYPE html>
<html>

<?php include('header.php');?>


<form class="form-horizontal row-fluid"  action="../../action/new-immune.php" method="POST">
           <center>     
      
                                  <div class="form-group form-float">
                                <div class="form-line">
                   
                              Cock ID
                    
                           <input type="text" class="form-control show-tick" name = "cock"   autocomplete = "off" list="father">
                        <datalist id="father">
                        
                                <?php
                          include '../../../config/db_config.php';
                 
                                     $sql = "SELECT * FROM chickens";
                                                     $result = $conn->query($sql);
                                  
                                    if ($result->num_rows > 0) {
    
                                                   while($row = $result->fetch_assoc()) {
                                                       echo '<option value="'.$row['chicken_id'].'">'.$row['chicken_id'].'</option>';
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
                        Date Immune: <input type="date" class="form-control" 
                         name="date" placeholder="date" 
                         >
                        </div>
                              </div>
                                <div class="form-group-float">
                                <div class-"form-line">
                           Name of Drug:<input class="form-control" placeholder="Name of Drug" type="text" name="immune_type" >
                                  
                                </div> 
                                </div>
                                <div class="form-group-float">
                                <div class-"form-line">
                           Dosage: <input class="form-control" placeholder="Dosage" type="text" name="dosage_immune" >
                                  
                                </div> 
                                </div>
                                <div class="form-group-float">
                                <div class-"form-line">
                           Immunization Description: <input class="form-control" placeholder="Immunization Description" type="text" name="descrip" >
                                  
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