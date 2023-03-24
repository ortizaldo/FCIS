<!DOCTYPE html>
<html>

<?php include('header.php');?>






<?php

error_reporting(0);
$id = $_GET['id'];
include '../../../config/db_config.php';

$sql = "SELECT * FROM cocks WHERE cock_id = '$id'";
$result = $conn->query($sql);


if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
    $cock_id = $row['cock_id'];
      $cock_categories = $row['cock_categories'];
    $father_bloodline = $row['father_bloodline'];
    $f_num_wins = $row['f_num_wins'];
    $f_num_loss = $row['f_num_loss'];
    $mother_bloodline = $row['mother_bloodline'];
      $day_to_transfer = $row['day_to_transfer'];
    $no_days = $row['no_days'];
    $handler = $row['handler'];
    }
} else {

}
$conn->close();

?>


                         
                            <form action = "../../action/update-cock.php" method= "POST">

                               <input type="hidden" class="form-control" name="id"    value = "<?php echo $id?> ">

                                <div class="form-group form-float">
                                <div class="form-line">
                   
                             Cock Category :<input type="text" class="form-control show-tick" name = "cock_categories"  value = "<?php echo $cock_categories?>"  autocomplete = "off" list="cat">
                        <datalist id="cat">
                        
                                <?php
                          include '../../../config/db_config.php';
                 
                                     $sql = "SELECT * FROM cock_categories  WHERE shop = '$SEshopno' or shop = 'ALL' ORDER BY name";
                                                     $result = $conn->query($sql);
                                  
                                    if ($result->num_rows > 0) {
    
                                                   while($row = $result->fetch_assoc()) {
                                                       echo '<option value="'.$row['name'].'">'.$row['name'].'</option>';
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
                   
                           Father Bloodline :<input type="text" class="form-control show-tick" name = "father_bloodline"  value = "<?php echo $father_bloodline?>"  autocomplete = "off" list="father_bloodline">
                        <datalist id="father_bloodline">
                        
                                <?php
                          include '../../../config/db_config.php';
                 
                                     $sql = "SELECT * FROM cock_categories  WHERE shop = '$SEshopno' or shop = 'ALL' ORDER BY name";
                                                     $result = $conn->query($sql);
                                  
                                    if ($result->num_rows > 0) {
    
                                                   while($row = $result->fetch_assoc()) {
                                                       echo '<option value="'.$row['name'].'">'.$row['name'].'</option>';
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
                   Father Number of wins: <input type="number" class="form-control" name="f_num_wins" placeholder="No. of wins" value = "<?php echo $f_num_wins?>">
                        </div>
                                </div>
                                          <div class="form-group form-float">
                                <div class="form-line">
                    Father Number of loss: <input type="number" class="form-control" name="f_num_loss" placeholder="No. of loss" value = "<?php echo $f_num_loss?>">
                        </div>
                                </div>
                                                 <div class="form-group form-float">
                                <div class="form-line">
                   
                          Mother Bloodline :<input type="text" class="form-control show-tick" name = "mother_bloodline"  value = "<?php echo $mother_bloodline?>"  autocomplete = "off" list="mother_bloodline">
                        <datalist id="mother_bloodline">
                        
                                <?php
                          include '../../../config/db_config.php';
                 
                                     $sql = "SELECT * FROM cock_categories  WHERE shop = '$SEshopno' or shop = 'ALL' ORDER BY name";
                                                     $result = $conn->query($sql);
                                  
                                    if ($result->num_rows > 0) {
    
                                                   while($row = $result->fetch_assoc()) {
                                                       echo '<option value="'.$row['name'].'">'.$row['name'].'</option>';
                                                         }
                                                    } else {
  
                                                      }
                                                       $conn->close();
                          ?>
                        </datalist>
                   
                        </div>
                                </div>




                                
                                
                                        <div class="form-group form-float">
                                
                                   <div class="form-group form-float">
                                <div class="form-line">
                        Born day: <input type="date" class="form-control" 
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
                         
                                   <div class="form-group form-float">
                                <div class="form-line">
                   
                           Handlerhandler :<input type="text" class="form-control show-tick" name = "handler"  value = "<?php echo $handler?>"  autocomplete = "off" list="handler">
                        <datalist id="handler">
                        
                                <?php
                          include '../../../config/db_config.php';
                 
                                     $sql = "SELECT * FROM handlers  WHERE shop = '$SEshopno' or shop = 'ALL' ORDER BY handler_name";
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
                                 <button type="submit" class="btn btn-lg bg-orange waves-effect">
                                    <i class="material-icons">save</i>Save</button>
                                  </center>
                            </form>
                     

            
            

    <!-- Jquery Core Js -->
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