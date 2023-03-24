<!DOCTYPE html>
<html>

<?php include('header.php');?>
<?php


error_reporting(0);
$id = $_GET['id'];
include '../../../config/db_config.php';

$sql = "SELECT * FROM feed where feed_id = '$id' ";
$result = $conn->query($sql);


if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
      $feed_id= $row['feed_id'];
    $feed_date= $row['feed_date'];
    $cock_id= $row['cock_id'];
    $type_feed= $row['type_feed'];
    $descrip= $row['descrip'];
   
   
    }
} else {

}
$conn->close();

?>


<form class="form-horizontal row-fluid" action="../../action/update-feed.php" method="POST">
           <center>    
           <h4>Feeding Details</h4> 
      
                                  <div class="form-group form-float">
                                <div class="form-line">
                                   <input type="hidden" class="form-control show-tick" 
                           value = "<?php echo $feed_id  ?>" name = "id">
                      
                   
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
                        Date of Feeding: <input type="date"  value = "<?php echo $feed_date;  ?>" class="form-control" 
                         name="date" placeholder="date" 
                         >
                        </div>
                                </div>
                                <div class="form-group form-float">
                                <div class="form-line">
                        Feeds Name: <input type="text"  value = "<?php echo $type_feed;  ?>" class="form-control" 
                         name="type_feed" placeholder="Feeds Name" 
                         >
                        </div>
                                </div>
                                <div class="form-group form-float">
                                <div class="form-line">
                        Feed Description: <input type="text"  value = "<?php echo $descrip;  ?>" class="form-control" 
                         name="descrip" placeholder="Feed Description" 
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