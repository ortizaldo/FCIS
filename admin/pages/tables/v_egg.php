
<form class="form-horizontal row-fluid" action="../../action/hatched.php" method="POST" enctype="multipart/form-data" >
           <center>      
      
           
                                 <h2 class="card-inside-title">Egg</h2>
                                  <?php include '../../../config/db_config.php';
                            $id = $_GET['id'];
                                 
                              $sql = "SELECT * FROM eggs WHERE breeder_id = '$id' ";
                                 $result = $conn->query($sql);
                                 $mpen = 0;
                                 if ($result->num_rows > 0) {
                                   $mypr1=mysqli_num_rows($result);
                                     while($row = $result->fetch_assoc()) {
                                      $egg = $row['num_of_egg'];
                                      $breeder_id = $row['breeder_id'];
                                        $myvalue = $row['num_of_egg'];

                                       $mpen += $myvalue;

                                     }}
                                     ?>
                                             <?php include '../../../config/db_config.php';
                            $id = $_GET['id'];
                                 
                              $sql = "SELECT * FROM breeders WHERE breeder_id = '$id' ";
                                 $result = $conn->query($sql);
                              
                                 if ($result->num_rows > 0) {
                                   $mypr1=mysqli_num_rows($result);
                                     while($row = $result->fetch_assoc()) {
                                      $breeder_m_id = $row['breeder_m_id'];
                              

                                     }}
                                     ?>
                                         <?php
             $x = 1;
             $z = 1;
             $i = $mpen;
             ?>
                                         <?php
                      $y = 23; 
                                 while($x <=  $i) {
  $chick_id= rand(1000,9999);
   $y++;
  $egg = "C-$x-$chick_id";
                                   
                                         ?>

                           
                             <div class="demo-checkbox">
                              <input type="hidden" name="breeder_m_id" value="<?php echo $breeder_m_id ?>">
                           <input type="hidden" name="breeder_id" value="<?php echo $id ?>">
                                <input type="checkbox" name = "mother_id[]" value = "<?php echo $z++ ?>-<?php echo $breeder_m_id; ?>" id="md_checkbox_<?php echo $y; ?>" class="filled-in chk-col-red"  />
                                
                                
                               <label for="md_checkbox_<?php echo $y; ?>"><?php echo $x++ ?></label>

                                
                            </div>
                            

                                                    
                                                     <?php

                                                          }
                                                          ?>


                                     
                           

                    
              
                                
        
<div class="control-group">
    <div class="controls">
    <center>
           <button type="submit" name="submit" value="submit" class="btn">Add</button>
         
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
