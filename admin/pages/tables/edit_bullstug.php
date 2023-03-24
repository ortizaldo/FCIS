

<?php

error_reporting(0);
$id = $_GET['id'];
include '../../../config/db_config.php';

$sql = "SELECT * FROM chickens WHERE chicken_id = '$id'";
$result = $conn->query($sql);


if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
    $chick_id = $row['chicken_id'];
       $services = $row['services'];
      $chick_categories = $row['chicken_categories'];
      $father_id = $row['chicken_father_id'];
    $father_bloodline = $row['father_bloodline'];
 $mother_id = $row['chicken_mother_id'];
    $mother_bloodline = $row['mother_bloodline'];
  
      $day_to_transfer = $row['day_to_transfer'];
    $no_days = $row['no_days'];
    
    }
} else {

}
$conn->close();

?>


                         
                            <form action = "../../action/edit_bullstug.php" method= "POST">

                               <input type="hidden" class="form-control" name="id"    value = "<?php echo $chick_id?> ">

                                <div class="form-group form-float">
                                <div class="form-line">
                   
                             Chicken Category :<input type="text" class="form-control show-tick" name = "chick_categories"  value = "<?php echo $chick_categories?>" >
                     
                        
                         
                   
                        </div>
                                </div>
                          
                                 <div class="form-group form-float">
                                <div class="form-line">
                   
                           Sire  ID :<input type="text" class="form-control show-tick" name = "father_id"  value = "<?php echo  $father_id; ?>"  autocomplete = "off" list="father_id">
                        <datalist id="father_id">
                        
                                <?php
                          include '../../../config/db_config.php';
                 
                                     $sql = "SELECT * FROM breeding ORDER BY name";
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
                   
                           Dam  ID :<input type="text" class="form-control show-tick" name = "mother_id"  value = "<?php echo $mother_id; ?>"  autocomplete = "off" list="mother_id">
                        <datalist id="mother_id">
                        
                                <?php
                          include '../../../config/db_config.php';
                 
                                     $sql = "SELECT * FROM breeding ";
                                                     $result = $conn->query($sql);
                                  
                                    if ($result->num_rows > 0) {
    
                                                   while($row = $result->fetch_assoc()) {
                                                       echo '<option value="'.$row['  breeder_m_id'].'">'.$row['  breeder_m_id'].'</option>';
                                                         }
                                                    } else {
  
                                                      }
                                                       $conn->close();
                          ?>
                        </datalist>
                   
                        </div>
                                </div>



                                  <div class="form-group form-float">
                                <div class="form-line"> Age       
                  <input type="text" class="form-control show-tick" name = "age"  value = "<?php echo $age; ?>"  autocomplete = "off" list="mother_id">
                                 </div>
                               </div>



                                   <div class="form-group form-float">
                                <div class="form-line">
                        Hatched day: <input type="date" class="form-control" 
                         name="no_days" placeholder="Number of days" 
                          value = "<?php echo $no_days ?>">
                        </div>
                                </div>

                                </div>
                          <div class="form-group form-float">
                                <div class="form-line">
                         Day transfer: <input type="date" class="form-control" 
                         name="day_to_transfer" placeholder="Day transfer" 
                          value = "<?php echo $day_to_transfer ?>">
                        </div>
                                </div>
                         
                                   



                    
                                <center>
                                 <button type="submit" class="btn btn-lg bg-orange waves-effect">
                                    <i class="material-icons">save</i>Update</button>
                                  </center>
                            </form>
                     

    