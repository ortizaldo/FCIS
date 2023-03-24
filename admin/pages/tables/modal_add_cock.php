<!DOCTYPE html>
<html>
 <link href="../../plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <link href="../../plugins/dropzone/dropzone.css" rel="stylesheet">
<link href="../../plugins/multi-select/css/multi-select.css" rel="stylesheet">
  <link href="../../plugins/bootstrap-tagsinput/bootstrap-tagsinput.css" rel="stylesheet">
    <link href="../../plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />
  <link href="../../plugins/nouislider/nouislider.min.css" rel="stylesheet" />
 <script src="../../plugins/bootstrap-select/js/bootstrap-select.js"></script>
 <script src="../../plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
 <script src="../../plugins/dropzone/dropzone.js"></script>

  <script src="../../plugins/jquery-inputmask/jquery.inputmask.bundle.js"></script>

  <script src="../../plugins/multi-select/js/jquery.multi-select.js"></script>
 <script src="../../plugins/jquery-spinner/js/jquery.spinner.js"></script>

<script src="../../plugins/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>
   <script src="../../plugins/nouislider/nouislider.js"></script>
   <!-- Waves Effect Plugin Js -->
    <script src="../../plugins/node-waves/waves.js"></script>
    <script src="jquery.js"></script>
    <script src="chosen.jquery.min.js"></script>
	 <link rel="stylesheet" href="chosen.min.css">
<?php include('header.php');?>






<body>
                         
                            <form action = "../../action/new-cock.php" method= "POST">


                                  <div class="form-group form-float">
                                <div class="form-line">
                   
                              Cock Category 
                    
                           <input type="text" class="form-control show-tick" name = "cock_categories"   autocomplete = "off" list="category">
                        <datalist id="category">
                        
                                <?php
                          include '../../../config/db_config.php';
                 
                                     $sql = "SELECT * FROM cock_categories WHERE shop = '$SEshopno' or shop = 'ALL' ORDER BY name";
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
                   
                            Father Bloodline
                    
                           <input type="text" class="form-control show-tick" name = "father_bloodline"   autocomplete = "off" list="father_bloodline">
                        <datalist id="father_bloodline">
                        
                                <?php
                          include '../../../config/db_config.php';
                 
                                     $sql = "SELECT * FROM cock_categories WHERE shop = '$SEshopno' or shop = 'ALL' ORDER BY name";
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
                    Father Number of wins: <input type="number" class="form-control" name="f_num_wins" placeholder="No. of wins" required autofocus >
                        </div>
						</div>
						  <div class="form-group form-float">
                                <div class="form-line">
                  Father number of losses: <input type="number" class="form-control" name="f_num_loss" placeholder="No. of Losses" required autofocus >
                        </div>
                                </div>
                                                <div class="form-group form-float">
                                <div class="form-line">
                   
                           Mother Bloodline
                    
                           <input type="text" class="form-control show-tick" name = "mother_bloodline"   autocomplete = "off" list="mother_bloodline">
                        <datalist id="mother_bloodline">
                        
                                <?php
                          include '../../../config/db_config.php';
                 
                                     $sql = "SELECT * FROM cock_categories WHERE shop = '$SEshopno' or shop = 'ALL' ORDER BY name";
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
                       Born Day: <input type="date" class="form-control" 
                         name="no_days" required autofocus
                         >
                        </div>
                                </div>
                          <div class="form-group form-float">
                                <div class="form-line">
                        Date to transfer cage : <input type="date" class="form-control" 
                         name="day_to_transfer" required autofocus
                         >
                        </div>
                                </div>
    
                                     <div class="form-group form-float">
                                <div class="form-line">
                            Handler :<input type="text" class="form-control show-tick" name = "handler" list="handler_name"  value = "<?php echo $handler?>"  autocomplete = "off">
                        <datalist id="handler_name">
                        
                                <?php
                          include '../../../config/db_config.php';
                 
                                     $sql = "SELECT * FROM handlers WHERE shop = '$SEshopno' or shop = 'ALL' ORDER BY handler_name";
                                                     $result = $conn->query($sql);
                                  
                                    if ($result->num_rows > 0) {
    
                                                   while($row = $result->fetch_assoc()) {
                                                       echo '<option value="'.$row['handler_name'].'">'.$row['handler_name'].'</option>';
                                                         }
                                                    } else {
  
                                                      }
                                                       $conn->close();  ?> </datalist>
                   
                                           </div>
                                            </div>
                                <center>
                                 <button type="submit" class="btn btn-lg bg-orange waves-effect">
                                    <i class="material-icons">save</i>Save</button>
                                  </center>
                            </form>
                     

            
   
    <!-- Jquery Core Js -->
    <script src="../../plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="../../plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="../../plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="../../plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="../../plugins/node-waves/waves.js"></script>

    <!-- Jquery DataTable Plugin Js -->
    <script src="../../plugins/jquery-datatable/jquery.dataTables.js"></script>
    <script src="../../plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
    <script src="../../plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
    <script src="../../plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
    <script src="../../plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
    <script src="../../plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
    <script src="../../plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
    <script src="../../plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
    <script src="../../plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>

    <!-- Custom Js -->
	 <script src="../../plugins/bootstrap-select/js/bootstrap-select.js"></script>
 <script src="../../plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
 <script src="../../plugins/dropzone/dropzone.js"></script>

  <script src="../../plugins/jquery-inputmask/jquery.inputmask.bundle.js"></script>

  <script src="../../plugins/multi-select/js/jquery.multi-select.js"></script>
 <script src="../../plugins/jquery-spinner/js/jquery.spinner.js"></script>

<script src="../../plugins/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>
   <!-- Waves Effect Plugin Js -->
    <script src="../../plugins/node-waves/waves.js"></script>
    <script src="../../js/admin.js"></script>
    <script src="../../js/pages/tables/jquery-datatable.js"></script>
    <script src="../../js/pages/forms/advanced-form-elements.js"></script>
    <!-- Demo Js -->
    <script src="../../js/demo.js"></script>
</body>

</html>