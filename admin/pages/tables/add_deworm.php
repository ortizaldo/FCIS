


<form class="form-horizontal row-fluid"  action="../../action/new-deworm.php" method="POST">
           <center> 
           <h4>Deworming Details</h4>      
      
                                  <div class="form-group form-float">
                                <div class="form-line">
                                   <input type="hidden" class="form-control show-tick" 
                           value = "<?php echo $deworm_id  ?>" name = "id">
                      
                   
                              Cock ID

                    
                           <input type="text" class="form-control show-tick" 
                            name = "cock"   autocomplete = "off" list="father">
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
                        Date of Deworming: <input type="date" class="form-control" 
                         name="deworm_date" placeholder="date" 
                         >
                        </div>
                              </div>
                                <div class="form-group-float">
                                <div class-"form-line">
                                Name of Drug:<input class="form-control" placeholder="Name of Drug" type="text" name="deworm_type" >
                                  
                                </div> 
                                </div>
                                <div class="form-group-float">
                                <div class-"form-line">
                                Dosage:<input class="form-control" placeholder="Usage" type="text" name="usage_deworm" >
                                  
                                </div> 
                                </div>
                                <div class="form-group-float">
                                <div class-"form-line">
                                Deworm Description:<input class="form-control" placeholder="Deworm Description" type="text" name="descrip" >
                                  
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
                     

 