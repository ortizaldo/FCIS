
<form class="form-horizontal row-fluid" action="../../action/new-breed.php" method="POST" enctype="multipart/form-data" >
           <center>      
      
                                  <div class="form-group form-float">
                                <div class="form-line">
                         Sire
                    
                           <input type="text" class="form-control show-tick"  name = "father"   autocomplete = "off" list="father">
                        <datalist id="father">
                        
                                <?php
                          include '../../../config/db_config.php';
                 
                                     $sql = "SELECT * FROM father";
                                                     $result = $conn->query($sql);
                                  
                                    if ($result->num_rows > 0) {
    
                                                   while($row = $result->fetch_assoc()) {
                                                       echo '<option value="S-'.$row['father_no'].'">
                                                       Id:  S-'.$row['father_no'].' ; Bloodline: '.$row['father_racist'].' '.$row['father_racist'].' </option>';
                                                          echo '<input type = "hidden" name  = "fprim_id" value="'.$row['prim_id'].'">';
                                                        echo '<input type = "text" name  = "father_bloodline" value="'.$row['father_racist'].'">';
                                                  

                                                         }
                                                    } else {
  
                                                      }
                                                       $sql = "SELECT * FROM chickens where type = 'Male' ";
                                                     $result = $conn->query($sql);
                                  
                                    if ($result->num_rows > 0) {
    
                                                   while($row = $result->fetch_assoc()) {
                                                      echo '<input type = "text" name  = "prim_id" value="'.$row['prim_id'].'">';
                                                       echo '<option value="'.$row['chicken_id'].'">

                                                       Id:  '.$row['chicken_id'].' ; Bloodline: '.$row['bloodline'].' </option>';
                                                        echo '<input type = "text" name  = "father_bloodline" value="'.$row['bloodline'].'">';
                                                            
                                                         }
                                                    } else {
  
                                                      }
                                               
                          ?>
                        </datalist>
                   
                        </div>
                                </div>
                                         
                                 <h2 class="card-inside-title">Dam</h2>
                            
                                         <?php
                          include '../../../config/db_config.php';
                    $sql = "SELECT * FROM mother ";
                                                     $result = $conn->query($sql);
                                  
                                    if ($result->num_rows > 0) {
                                      $i = 21; 
                                      while($row = $result->fetch_assoc()) {
                                       $i++;
                                     
                                   
                                         ?>

                           
                             <div class="demo-checkbox">
                           
                                <input type="checkbox" name = "mother_id[]" value = "<?php echo 'D-'.$row['mother_num'].''; ?>" id="md_checkbox_<?php echo $i; ?>" class="filled-in chk-col-red"  />

                                
                                
                                <label for="md_checkbox_<?php echo $i; ?>"><?php echo 'D-'.$row['mother_num'].''; ?>:<?php echo $row['mother_racist']; ?></label>
  <input type="hidden" name="mother_racist[]" value = "<?php echo $row['mother_racist'];?>">

                                
                            </div>
                            

                                                    
                                                     <?php

                                                          }
                                                          ?>
                             <div class="form-group-float">
                                <div class="form-line">
                                Bloodline Result: <input class="form-control" placeholder="Bloodline Result" type="textarea" name="descrip" >
                                  
                                </div> 
                                </div>

                                                          <?php
                                                    } else {
  
                                                      }
                                                       $conn->close();
                          ?>
                       
                           

                    
              
                                
        
<div class="control-group">
    <div class="controls">
    <center>
           <button type="submit" name="submit" value="submit" class="btn">Add</button>
         
                                                            </center>
                                      </div>
                                      </div>
                                    </form>
                             </center>     
                     
        <script type="text/javascript">
                          function readURL(input) {

  if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function(e) {
      $('#blah').attr('src', e.target.result);
    }

    reader.readAsDataURL(input.files[0]);
  }
}

$("#imgInp").change(function() {
  readURL(this);
});
                      </script> 
