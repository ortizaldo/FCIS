<!DOCTYPE html>
<html>

<?php include('header.php');?>


<form class="form-horizontal row-fluid" action="../../action/new_handler.php" method="POST">
           <center>     
        <div class="control-group">
    <label class="control-label" for="basicinput">Handler</label>
           <div
            class="controls">
                  <input type="text" id="basicinput" placeholder="Handler Name..." name="handler" required class="span8">
                                                
          </div>
             </div>
                <div class="control-group">
    <label class="control-label" for="basicinput">Address</label>
           <div class="controls">
                  <input type="text" id="basicinput" placeholder="Address" name="address" required class="span8">
                                                
          </div>
             </div>

   <div class="control-group">
    <label class="control-label" for="basicinput">Contact Person</label>
           <div class="controls">
                  <input type="text" id="basicinput" placeholder="Contact Person Name..." name="contact_person" required class="span8">
                                                
          </div>
             </div>
                                        
      <div class="control-group">
    <label class="control-label" for="basicinput">Contact Number</label>
     <div class="controls">
     <input type="number" id="basicinput" placeholder="Contact Number..." name="contact_no" required class="span8">
  </div>
   </div>
<div class="control-group">
    <div class="controls">
    <center>
           <button type="submit" class="btn">Add Handler</button>
         
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