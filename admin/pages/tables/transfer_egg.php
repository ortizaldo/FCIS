
                         <?php 
                         $id = $_GET['id'];
                          $breeder_id = $_GET['breeder_id'];
                          ?>
                           

                             <form action = "../../action/transfer_egg.php" method= "POST">

                                     <div class="form-group form-float">
                                <div class="form-line">
                              
                             <input type="hidden" name = "breeder_id" value = "<?php echo $breeder_id ?>" class = "form-control">
                                </div>
                                </div>
                                  <div class="form-group form-float">
                                <div class="form-line">
                              Check ID: <input type="text" name = "id" value = "<?php echo $id ?>" class = "form-control">
                                </div>
                                </div>
                   
                         
                                   <div class="form-group form-float">
                                <div class="form-line">
                   
                           Age :<input type="text" class="form-control show-tick" name = "age_chicks"  >
                         </div>
                       </div>
   
                                </div>
                         
                         
                                  



                    
                                <center>
                                 <button name = "submit" type="submit" class="btn btn-lg bg-orange waves-effect">
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