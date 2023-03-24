
                         
                           

                             <form action = "../../action/add_dam.php" method= "POST">

                            

                       
                                    
                                     
                                   <div class="form-group form-float">
                                <div class="form-line">
                   
                          Blood Line:<input type="text" class="form-control show-tick" name = "bloodline"  >
                         </div>
                       </div>
                          
                                         
                  
                                 
                                   <div class="form-group form-float">
                                <div class="form-line">
                        Hatched day: <input type="date" class="form-control" 
                         name="no_days" 
                          value = "">
                        </div>
                                </div>

                                </div>
                         
                         
                                   <div class="form-group form-float">
                                <div class="form-line">
                   
                           Handler :<input type="text" class="form-control show-tick" name = "handler"  value = ""  autocomplete = "off" list="handler">
                        <datalist id="handler">
                        
                                <?php
                          include '../../../config/db_config.php';
                 
                                     $sql = "SELECT * FROM handlers   ORDER BY handler_name";
                                                     $result = $conn->query($sql);
                                  
                                    if ($result->num_rows > 0) {
    
                                                   while($row = $result->fetch_assoc()) {
                                                       echo '<option value="'.$row['handler_name'].'">'.$row['handler_name'].'</option>';
                                                         }
                                                    } else {
  
                                                      }
                                                       $conn->close();
                          ?>
                        </datalist>
                   
                        </div>
                                </div>



                    
                                <center>
                                 <button name = "submit" type="submit" class="btn btn-lg bg-orange waves-effect">
                                    <i class="material-icons">save</i>Save</button>
                                  </center>
                            </form> 


