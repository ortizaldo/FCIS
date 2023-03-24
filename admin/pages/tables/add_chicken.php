
                         
                           

                             <form action = "../../action/add_chicken.php" method= "POST">

                            

                       
                                     <div class="form-group form-float">
                                <div class="form-line">
                                  <select  class = "form-control" name = "category">
                                               <?php
                          include '../../../config/db_config.php';
                 
                                     $sql = "SELECT * FROM cock_categories ";
                                                     $result = $conn->query($sql);
                                  
                                    if ($result->num_rows > 0) {
    
                                                   while($row = $result->fetch_assoc()) {
                                                       echo '<option value="'.$row['name'].'">'.$row['name'].'</option>';
                                                         }
                                                    } else {
  
                                                      }
                                                       $conn->close();
                          ?>
 


                                  </select>
                     
                                </div>
                              </div>


                                 <div class="form-group form-float">
                                <div class="form-line">
                   
                           Sire  ID :<input type="text" class="form-control show-tick" name = "father_id"  value = ""  autocomplete = "off" list="father_id">
                        <datalist id="father_id">
                        
                                <?php
                          include '../../../config/db_config.php';
                 
                                     $sql = "SELECT * FROM breeders ";
                                                     $result = $conn->query($sql);
                                  
                                    if ($result->num_rows > 0) {
    
                                                   while($row = $result->fetch_assoc()) {
                                                       echo '<option value="'.$row['  breeder_f_id'].'">'.$row['breeder_f_id'].'</option>';
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
                   
                           Dam ID :<input type="text" class="form-control show-tick" name = "mother_id"  value = ""  autocomplete = "off" list="father_bloodline">
                        <datalist id="father_bloodline">
                        
                                <?php
                          include '../../../config/db_config.php';
                 
                                     $sql = "SELECT * FROM breeders ";
                                                     $result = $conn->query($sql);
                                  
                                    if ($result->num_rows > 0) {
    
                                                   while($row = $result->fetch_assoc()) {
                                                       echo '<option value="'.$row['breeder_m_id'].'">'.$row['breeder_m_id'].'</option>';
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
                   
                           Age:<input type="text" class="form-control show-tick" name = "age"  >
                         </div>
                       </div>
                                         
                  
                                 
                                   <div class="form-group form-float">
                                <div class="form-line">
                        Hatched day: <input type="date" class="form-control" 
                         name="no_days" placeholder="Number of days" 
                          value = "">
                        </div>
                                </div>

                                </div>
                        
                                   



                    
                                <center>
                                 <button name = "submit" type="submit" class="btn btn-lg bg-orange waves-effect">
                                    <i class="material-icons">save</i>Save</button>
                                  </center>
                            </form> 


