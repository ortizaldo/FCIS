<?php

error_reporting(0);
$id = $_GET['id'];



include '../../../config/db_config.php';

$sql = "SELECT * FROM chickens WHERE chicken_id = '$id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
    $chick_id = $row['chicken_id'];
    $bloodline = $row['bloodline'];

    }
} else {

}
$conn->close();

?>

                         
                           

                             <form action = "../../action/add_con.php" method= "POST">

                                     <div class="form-group form-float">
                                <div class="form-line">
                   
                         Chicken Id :<input type="text" class="form-control show-tick" name = "chicken"  value = "<?php echo $chick_id; ?>"  autocomplete = "off" list="father_bloodline">
                        <datalist id="father_bloodline">
                        
                                <?php
                          include '../../../config/db_config.php';
                 
                                     $sql = "SELECT * FROM chickens where type = 'Male' ";
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
                   
                           Place :<input type="text" class="form-control show-tick" name = "place"  >
                         </div>
                       </div>
                                           <div class="form-group form-float">
                                <div class="form-line">
                   
                           Event type :<input type="text" class="form-control show-tick" name = "event_type"  >
                         </div>
                       </div>          
                  
                                 
                                   <div class="form-group form-float">
                                <div class="form-line">
                        Event Date: <input type="date" class="form-control" 
                         name="date" placeholder="Number of days" 
                          value = "">
                        </div>
                                </div>

                                </div>
                         
                         
                                   



                    
                                <center>
                                 <button name = "submit" type="submit" class="btn btn-lg bg-orange waves-effect">
                                    <i class="material-icons">save</i>Save</button>
                                  </center>
                            </form> 


