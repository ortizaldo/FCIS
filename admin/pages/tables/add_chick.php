
                         
                           

                             <form action = "../../action/add_chicks.php" method= "POST">

                                     <div class="form-group form-float">
                                <div class="form-line">
                   
                          Breeder Id :<input type="text" class="form-control show-tick" name = "mother_id"  value = ""  autocomplete = "off" list="father_bloodline">
                        <datalist id="father_bloodline">
                        
                                <?php
                          include '../../../config/db_config.php';
                 
                                     $sql = "SELECT * FROM breeders ";
                                                     $result = $conn->query($sql);
                                  
                                    if ($result->num_rows > 0) {
    
                                                   while($row = $result->fetch_assoc()) {
                                                                echo '<option value="'.$row['breeder_id'].'">'.$row['breeder_id'].'</option>';
                                                         echo '<input type = "text" name  = "father_id" value="'.$row['breeder_f_id'].'">';
                                                          echo '<input type = "text" name  = "father_bloodline" value="'.$row['father_bloodline'].'">';
                                                           echo '<input type = "text" name  = "mother_id" value="'.$row['breeder_m_id'].'">';
                                                            echo '<input type = "text" name  = "mother_bloodline" value="'.$row['mother_bloodline'].'">';
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
                   
                           Age :<input type="text" class="form-control show-tick" name = "age_chicks"  >
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


