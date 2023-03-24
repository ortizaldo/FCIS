<!DOCTYPE html>
<html>

<?php include('header.php');?>


<form class="form-horizontal row-fluid"  action="../../action/new_cfeed.php" method="POST">
           <center>  
           <h4>Feeding Fighting Cock Details</h4>    
      
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
                        Date of Feeding: <input type="date" class="form-control" 
                         name="date" placeholder="date" 
                         >
                        </div>
                              </div>
                                <div class="form-group-float">
                                <div class-"form-line">
                               Feeds Name: <input class="form-control" placeholder="Feeds Name" type="text" name="type_cfeed" >
                                  
                                </div> 
                                </div>
                                <div class="form-group-float">
                                <div class-"form-line">
                               Feed Description: <input class="form-control" placeholder="Feed Description" type="text" name="descrip" >
                                  
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