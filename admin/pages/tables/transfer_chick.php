

<?php

error_reporting(0);
$id = $_GET['id'];
include '../../../config/db_config.php';

$sql = "SELECT * FROM chickens WHERE chicken_id = '$id'";
$result = $conn->query($sql);


if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
    $chick_id = $row['chicken_id'];
       $age_chicks = $row['age_chicks'];
      $chick_categories = $row['chicken_categories'];
      $father_id = $row['chicken_father_id'];
    $father_bloodline = $row['father_bloodline'];
 $mother_id = $row['chicken_mother_id'];
    $mother_bloodline = $row['mother_bloodline'];
   $type  = $row['type'];
      $day_to_transfer = $row['day_to_transfer'];
    $no_days = $row['no_days'];
    
    
    
    }
} else {

}
$conn->close();

?>

                         
                            <form action = "../../action/transfer_chick.php" method= "POST" enctype="multipart/form-data">

                               <input type="hidden" class="form-control" name="id"    value = "<?php echo $chick_id?> ">
    <input type='file' id="imgInp"  name = "image" />
                              <img id="blah" src="../../action/image/no_img.jpg"  style="height:250px; width:100%;no-repeat center top; display: block"  name = "image" class = "thumbnail" />            
   
                                <div class="form-group form-float">
                                <div class="form-line">
                   
                             Chick Category :<input type="text" class="form-control show-tick" name = "chick_categories"  value = "<?php echo $chick_categories?>" >
                     
                        
                         
                   
                        </div>
                                </div>
                          
                                 <div class="form-group form-float">
                                <div class="form-line">
                   
                           Father  ID :<input type="text" class="form-control show-tick" name = "father_id"  value = "<?php echo  $father_id; ?>"  autocomplete = "off" list="father_id">
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
                                 <input type="hidden" name = "day_to_transfer" value = "<?php echo $day_to_transfer ?>" >
                         <input type="hidden" name = "f_bloodline" value = "<?php echo $father_bloodline ?>" >
                           Mother  ID :<input type="text" class="form-control show-tick" name = "mother_id"  value = "<?php echo $mother_id; ?>"  autocomplete = "off" list="mother_id">
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
                         <div class="form-group form-float">
                                <div class="form-line">
                               Gender:
                                <select  name = "type" class = "form-control" >
                                   <option  value = "<?php echo $type ?>">
                                    <?php echo $type; ?>
                                  </option>
                                  <option value = "Male">
                                    Male
                                  </option>
                                   <option value = "Female">
                                  Female
                                  </option>
                                </select>
                                </div>
                              </div>        
                         <div class="form-group form-float">
                                <div class="form-line">
                        Age: <input type="text" class="form-control" 
                         name="age_chicks" placeholder="Age" 
                          value = "<?php echo $age_chicks ?>">
                        </div>
                                </div>
                                 
                                   <div class="form-group form-float">
                                <div class="form-line">
                                  Hatched Day :
                        <input type="text" value = "<?php echo $no_days ?>" class = "form-control" disabled>
                          
                        </div>
                                </div>
                                            <div class="form-group form-float">
                                <div class="form-line">
                                  Cage:
                        <input type="text"  class = "form-control" name = "cage" placeholder = "Cage location">
                          
                        </div>
                                </div>
                                 <input type="hidden" value = "<?php echo $no_days ?>"   name="no_days" >


                      
                         
                                   



                    
                                <center>
                                 <button type="submit" class="btn btn-lg bg-orange waves-effect">
                                    <i class="material-icons">save</i>Save</button>
                                  </center>
                            </form>
                     

            
             
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