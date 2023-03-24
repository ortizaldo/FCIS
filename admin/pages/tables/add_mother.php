<!DOCTYPE html>
<html>

<?php include('header.php');?>


<form class="form-horizontal row-fluid" action="../../action/new-mother.php" method="POST" enctype="multipart/form-data">

           <center>
           <h3>
Dam Information
</h3>     
                                
                                   <input type='file' id="imgInp"  name = "image" />
                              <img id="blah" src="../../action/image/no_img.jpg"   style="height:200px; width:100%;no-repeat center top; display: block"  name = "image" class = "thumbnail" />    
                                  <div class="form-group form-float">
                                <div class="form-line">
                   
                            Dam Racist
                    
                           <input type="text" class="form-control show-tick" name = "racist"   autocomplete = "off" >
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
                        Date Registered: <input type="date" class="form-control" 
                         name="date_mother" placeholder="Date Modified" 
                         >
                        </div>
                                </div>
                                    <div class="form-group-float">
                                <div class-"form-line">
                             Cage: <input class="form-control" placeholder="Cage Location" type="text" name="cage" >
                                  
                                </div> 
                                </div>
                                <div class="form-group-float">
                                <div class-"form-line">
                               Age of Dam: <input class="form-control" placeholder="Age of Dam" type="text" name="age_mother" >
                                  
                                </div> 
                                </div>
        
<div class="control-group">
    <div class="controls">
    <center>
           <button type="submit" class="btn">Add</button>
         
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