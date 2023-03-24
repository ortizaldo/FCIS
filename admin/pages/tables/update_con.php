

<?php

error_reporting(0);
$id = $_GET['id'];

$place = $_GET['place'];
$event_type = $_GET['event_type'];
$event_date = $_GET['event_date'];

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


                         
                            <form action = "../../action/save_battle.php" method= "POST">
     <input type="text" class="form-control show-tick"  value = "<?php echo $chick_id ?>"  name = "id"  >
           <input type="text" class="form-control show-tick"  value = "<?php echo $bloodline ?>"  name = "bloodline"  >                      
                              <div class="form-group form-float">
                                <div class="form-line"> Place    
                  <input type="text" class="form-control show-tick"  value = "<?php echo $place ?>"  name = "place"  >
                                 </div>
                               </div>
                            <div class="form-group form-float">
                                <div class="form-line"> Event Type      
                  <input type="text" class="form-control show-tick"   value = "<?php echo $event_type ?>" name = "event_type"  >
                                 </div>
                               </div>
                                <div class="form-group form-float">
                                <div class="form-line"> Date      
                  <input type="date" class="form-control show-tick" value = "<?php echo $event_date ?>" name = "date"  >
                                 </div>
                               </div>
                              <div class="form-group form-float">
                                <div class="form-line"> <wbr>Weight    
                  <input type="text" class="form-control show-tick" name = "weight"  >
                                 </div>
                               </div>
                            <div class="form-group form-float">
                                <div class="form-line">Gaff     
                  <input type="text" class="form-control show-tick" name = "gaff"  >
                                 </div>
                               </div>
                                <div class="form-group form-float">
                                <div class="form-line"> Injuries    
                  <input type="text" class="form-control show-tick" name = "injuries"  >
                                 </div>
                               </div>
                                   <div class="form-group form-float">
                                <div class="form-line">Opponents Owner
                  <input type="text" class="form-control show-tick" name = "owner"  >
                                 </div>
                               </div>
                                    <div class="form-group form-float">
                                <div class="form-line">Opponents
                  <input type="text" class="form-control show-tick" name = "opponents"  >
                                 </div>
                               </div>
                                  <div class="form-group form-float">
                                <div class="form-line"> Result   
                  <select class = "form-control" name = "result" >
                    <option value = "win">
                      Win
                    </option>
                      <option value = "loss">
                       Loss
                    </option>
                      <option value = "draw">
                      Draw
                    </option>
                  </select>
                                 </div>
                               </div>



                         
                    


                    
                                <center>
                                 <button type="submit" class="btn btn-lg bg-orange waves-effect">
                                    <i class="material-icons">save</i>Save</button>
                                  </center>
                            </form>
                     

    