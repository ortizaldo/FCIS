

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
                      
  <input type="hidden" class="form-control" name="id" value = "<?php echo $id;?>">

                <div class="form-group form-float">
                                <div class="form-line">Weight      
                  <input type="text" class="form-control show-tick"  name = "weight"  >
                                 </div>
                               </div>           <div class="form-group form-float">
                                <div class="form-line">Height      
                  <input type="text" class="form-control show-tick"  name = "height"  >
                                 </div>
                               </div>           
                                </div>          
                                 <div class="form-group form-float">
                                <div class="form-line">Injuries      
                  <input type="text" class="form-control show-tick"  name = "injuries"  >
                                 </div>
                               </div>
                                         <div class="form-group form-float">
                                <div class="form-line"> Gaff      
                  <input type="text" class="form-control show-tick"  name = "gaff"  >
                                 </div>
                               </div>
           <div class="form-group form-float">
                          <div class="form-line">Bloodline      
                                 <input type="text" class="form-control show-tick" name = "bloodline"value = "<?php echo $bloodline ?>" >
                                 </div>
                               </div>



                           <div class="form-group form-float">
                          <div class="form-line">Opponents Bloodline      
                                 <input type="text" class="form-control show-tick" name = "obloodline"  >
                                 </div>
                               </div>
           <div class="form-group form-float">
                                <div class="form-line"> Opponents Owner      
                  <input type="text" class="form-control show-tick" name = "oowner"  >
                                 </div>
                               </div>           <div class="form-group form-float">
                                <div class="form-line"> Opponents weight      
                  <input type="text" class="form-control show-tick"  name = "oweight"  >
                                 </div>
                               </div>           <div class="form-group form-float">
                                <div class="form-line"> Opponents height      
                  <input type="text" class="form-control show-tick"  name = "oheight"  >
                                 </div>
                               </div>         
                                 <div class="form-group form-float">
                                <div class="form-line"> Opponents gaff      
                  <input type="text" class="form-control show-tick"  name = "ogaff"  >
                                 </div>
                               </div>
                          
                                        <div class="form-group form-float">
                                <div class="form-line"> Opponents injuries      
                  <input type="text" class="form-control show-tick"  name = "oinjure"  >
                                 </div>
                               </div>
                           
                             

                              <div class="form-group form-float">
                                <div class="form-line"> Place    
                  <input type="text" class="form-control show-tick" value = "<?php echo $place ?>" name = "place"  >
                                 </div>
                               </div>
                            <div class="form-group form-float">
                                <div class="form-line"> Event Type      
                  <input type="text" class="form-control show-tick" value="<?php echo $event_type; ?>" name = "event_type"  >
                                 </div>
                               </div>
                                <div class="form-group form-float">
                                <div class="form-line"> Date      
                  <input type="date" class="form-control show-tick" value="<?php echo $event_date ?>" name = "date"  >
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
                  </select>
                                 </div>
                               </div>
                         
                    


                    
                                <center>
                                 <button type="submit" class="btn btn-lg bg-orange waves-effect">
                                    <i class="material-icons">save</i>Save</button>
                                  </center>
                            </form>
                     

    