<!DOCTYPE html>
<html>

<?php include('header.php');?>


<form class="form-horizontal row-fluid" action="../../action/new-father.php" method="POST" enctype="multipart/form-data" >
<center>
<h3> Sire Information</h3>
                               <!--  <input type='file' id="imgInp"  name = "image" />
                              <img id="blah" src="image/"  style="height:200px; width:100%;no-repeat center top; display: block"  name = "image" alt="your image" />    --> 
      
                                  <div class="form-group form-float">
                                <div class="form-line">
                   
                              
                      
                                   <input class= "btn btn-lg btn-warning" type='file' id="imgInp"  name = "image" />
                              <img id="blah" src="../../action/image/no_img.jpg"  style="height:200px; width:100%;no-repeat center top; display: block"  name = "image" class = "thumbnail" />    
                           Sire Bloodline: <input type="text" class="form-control show-tick" name = "racist" placeholder="Father Racist">
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
                        Signs Of Sire:<input type="text" class="form-control" name="signs" placeholder="Physical Signs of Cock" >
                        </div>
                                </div>
                                <div class="form-group form-float">
                                <div class="form-line">
                        Date Registered: <input type="date" class="form-control" 
                         name="date_father" placeholder="Date Modified" 
                         >
                        </div>
                                </div>
                                <div class="form-group form-float">
                                <div class="form-line">
                        Weight of Sire:<input type="text" class="form-control" name="weight" placeholder="Weight of Cock" >
                        </div>
                                </div>
                                
                                <div class="form-group form-float">
                                <div class="form-line">
                        Height of Sire: <input type="text" class="form-control" 
                         name="height" placeholder="Height of Sire" 
                         >
                        </div>
                                </div>

                                <div class="form-group form-float">
                                <div class="form-line">
                        Age of Sire: <input type="text" class="form-control" 
                         name="age_father" placeholder="Age of Sire" 
                         >
                        </div>
                                </div>

                                <div class="form-group form-float">
                                <div class="form-line">
                        Sire Description: <input type="text" class="form-control" 
                         name="father_descrip" placeholder="Sire Description" 
                         >
                        </div>
                                </div>
                                            <div class="form-group form-float">
                                <div class="form-line">
                        Cage: <input type="text" class="form-control" 
                         name="cage" placeholder="Cage location" 
                         >
                        </div>
                                </div>
                                       <div class="form-group form-float">
                                <div class="form-line">
                        Father History: <input type="text" class="form-control" 
                         name="father_hist" placeholder="Date Modified" 
                         >
                        </div>
                                </div>
                                            <div class="form-group form-float">
                                <div class="form-line">
                       Owner Name: <input type="text" class="form-control" 
                         name="owner_name" 
                         >
                        </div>
                                </div>
                                            <div class="form-group form-float">
                                <div class="form-line">
                        Bloodline History: <input type="text" class="form-control" 
                         name="bloodlines" 
                         >
                        </div>
                                </div>
                                            <div class="form-group form-float">
                                <div class="form-line">
                       Winning Title: <input type="text" class="form-control" 
                         name="win_t"  
                         >
                        </div>
                                </div>
                                            <div class="form-group form-float">
                                <div class="form-line">
                       Place born: <input type="text" class="form-control" 
                         name="place" 
                         >
                        </div>
                                </div>
                                            <div class="form-group form-float">
                                <div class="form-line">
                        Date Hatched: <input type="date" class="form-control" 
                         name="date_hatched" 
                         >
                        </div>
                                </div>
                                
                                
<div class="control-group">
    <div class="controls">
    <center>
           <button type="submit" class="btn">Register</button>
         
                                                            </center>
                                      </div>
                                      </div>
                                    </form>
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