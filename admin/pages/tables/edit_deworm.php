
<?php


error_reporting(0);
$id = $_GET['id'];
include '../../../config/db_config.php';

$sql = "SELECT * FROM deworm where deworm_id = '$id' ";
$result = $conn->query($sql);


if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
      $deworm_id= $row['deworm_id'];
    $deworm_date= $row['deworm_date'];
    $cock_id= $row['cock_id'];
    $deworm_type= $row['deworm_type'];
    $usage_deworm= $row['usage_deworm'];
   $descrip= $row['descrip'];
   
    }
} else {

}
$conn->close();

?>


<form class="form-horizontal row-fluid" action="../../action/update-deworm.php" method="POST">
           <center>     
           <h4>Deworming Details</h4> 
      
                                  <div class="form-group form-float">
                                <div class="form-line">
                                   <input type="hidden" class="form-control show-tick" 
                           value = "<?php echo $deworm_id  ?>" name = "id">
                      
                   
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
                        Date of Deworming: <input type="date"  value = "<?php echo $deworm_date;  ?>" class="form-control" 
                         name="deworm_date" placeholder="date" 
                         >
                        </div>
                                </div>
                                <div class="form-group form-float">
                                <div class="form-line">
                        Names of Drug: <input type="text"  value = "<?php echo $deworm_type;  ?>" class="form-control" 
                         name="deworm_type" placeholder="Names of Drug" 
                         >
                        </div>
                                </div>
                                <div class="form-group form-float">
                                <div class="form-line">
                        Dosage: <input type="text"  value = "<?php echo $usage_deworm;  ?>" class="form-control" 
                         name="usage_deworm" placeholder="Dosage" 
                         >
                        </div>
                                </div>
                                <div class="form-group form-float">
                                <div class="form-line">
                        Deworm Description: <input type="text"  value = "<?php echo $descrip;  ?>" class="form-control" 
                         name="descrip" placeholder="Deworm Description" 
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
                     

  

