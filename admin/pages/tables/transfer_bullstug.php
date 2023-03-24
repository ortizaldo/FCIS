

<?php

error_reporting(0);
$id = $_GET['id'];
include '../../../config/db_config.php';

$sql = "SELECT * FROM chickens WHERE chicken_id = '$id'";
$result = $conn->query($sql);


if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
    $chick_id = $row['chicken_id'];
        $prim_id = $row['prim_id'];
       $age = $row['age'];
      $chick_categories = $row['chicken_categories'];
      $father_id = $row['chicken_father_id'];
    $father_bloodline = $row['father_bloodline'];
 $mother_id = $row['chicken_mother_id'];
    $mother_bloodline = $row['mother_bloodline'];
  
      $day_to_transfer = $row['day_to_transfer'];
    $no_days = $row['no_days'];
          $image = $row['image'];
    
    }
} else {

}
$conn->close();

?>

                         
                            <form action = "../../action/transfer_bullstug.php" method= "POST" enctype="multipart/form-data">
                             <input type="hidden" class="form-control" name="prim_id"    value = "<?php echo $prim_id?> ">
                               <input type="hidden" class="form-control" name="id"    value = "<?php echo $chick_id?> ">
    <input type='file' id="imgInp"  name = "image" />
                                <img id="blah" src="../../action/image/<?php echo $image; ?>"  style="height:250px; width:100%;no-repeat center top; display: block"  name = "image" class = "thumbnail" />
                                <div class="form-group form-float">
                                <div class="form-line">
                   
                             Chicken Category :<input type="text" class="form-control show-tick" name = "chick_categories"  value = "<?php echo $chick_categories?>" >
                     
                        
                         
                   
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
                                </div>
                                         
                         <div class="form-group form-float">
                                <div class="form-line">
                        Age: <input type="text" class="form-control" 
                         name="age" placeholder="Age" 
                          value = "<?php echo $age ?>">
                        </div>
                                </div>
                                 
                                     <div class="form-group form-float">
                                <div class="form-line">
                                  Born Day :
                        <input type="text" value = "<?php echo $no_days ?>" class = "form-control" disabled>
                          
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
            
  