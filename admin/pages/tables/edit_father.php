<!DOCTYPE html>
<html>

<?php include('header.php');?>






<?php

error_reporting(0);
$id = $_GET['id'];
include '../../../config/db_config.php';

$sql = "SELECT * FROM father where father_id = '$id' ";
$result = $conn->query($sql);


if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
   
    $father_id = $row['father_id'];
    $father_racist = $row['father_racist'];
    $signs = $row['signs'];
    $weight = $row['weight'];
    $height = $row['height'];
    $age_father = $row['age_father'];
    $father_descrip = $row['father_descrip'];
    $image = $row['image'];
       $cage = $row['cage'];
    }
} else {

}
$conn->close();

?>


                         
                         <form class="form-horizontal row-fluid" action="../../action/update_father.php" method="POST">
           <center>     
           <h3> Sire Information</h3>
                               <input type="hidden" class="form-control" name="id" value = "<?php echo $father_id ?>">
                                  <div class="form-group form-float">
                                <div class="form-line">
                   
                              Cock Racist
                    
                           <input type="text" class="form-control show-tick" name = "racist"   autocomplete = "off" value = "<?php echo $father_racist ?>" list="category">
                        <datalist id="category">
                        
                                <?php
                          include '../../../config/db_config.php';
                 
                                     $sql = "SELECT * FROM cock_categories  ORDER BY name";
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
                        Signs of Sire<input type="text" class="form-control" name="signs"   value = "<?php echo $signs ?>">
                        </div>
                                </div>
                                <div class="form-group form-float">
                                <div class="form-line">
                        Date Registered: <input type="date" class="form-control" 
                         name="date_father" placeholder="date" 
                         >
                        </div>
                                </div>
                                <div class="form-group form-float">
                                <div class="form-line">
                        Weight Of Sire:<input type="text" class="form-control" name="weight"   value = "<?php echo $weight ?>">
                        </div>
                                </div>
                                 <div class="form-line">
                        Age of Sire: <input type="text"  value = "<?php echo $age_father;  ?>" class="form-control" 
                         name="age_father" placeholder="Father Age" 
                         >
                        </div>
                        </div>
                        <div class="form-group form-float">
                                <div class="form-line">
                        Sign Of Sire:<input type="text" class="form-control" name="signs"   value = "<?php echo $signs ?>">
                        </div>
                                </div>
                                <div class="form-group form-float">
                                <div class="form-line">
                        Height Of Sire:<input type="text" class="form-control" name="height"   value = "<?php echo $height ?>">
                        </div>
                                </div>
                                
                                <div class="form-group form-float">
                                <div class="form-line">
                        Sign Of Sire:<input type="text" class="form-control" name="signs"   value = "<?php echo $signs ?>">
                        </div>
                                </div>
                                 <div class="form-line">
                        Sire Description: <input type="text"  value = "<?php echo $father_descrip;  ?>" class="form-control" 
                         name="father_descrip" placeholder="Sire Description" 
                         >
                        </div>
                               <div class="form-line">
                        Cage: <input type="text"  value = "<?php echo $cage;  ?>" class="form-control" 
                         name="cage" placeholder="cage" 
                         >
                        </div>
                                
                                         
                              
<div class="control-group">
    <div class="controls">
    <center>
           <button type="submit" class="btn">Update</button>
         
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
                                      </div>
                                      </div>
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