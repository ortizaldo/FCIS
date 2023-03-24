<!DOCTYPE html>
<html lang="en">
<link href="plugins/dropzone/dropzone.css" rel="stylesheet">
 <link href=plugins/multi-select/css/multi-select.css" rel="stylesheet">

  <link href="plugins/bootstrap-tagsinput/bootstrap-tagsinput.css" rel="stylesheet">
 <link href="plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />
 <script src="plugins/bootstrap-select/js/bootstrap-select.js"></script>
<script src="plugins/dropzone/dropzone.js"></script>
 <script src="plugins/jquery-inputmask/jquery.inputmask.bundle.js"></script>
 <script src="plugins/multi-select/js/jquery.multi-select.js"></script>

    <script src="plugins/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>
	 <link href="plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.css" rel="stylesheet
 <link href="plugins/dropzone/dropzone.css" rel="stylesheet">
 <link href="plugins/multi-select/css/multi-select.css" rel="stylesheet">

  <link href="plugins/bootstrap-tagsinput/bootstrap-tagsinput.css" rel="stylesheet">
 <link href="plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />
 <script src="plugins/bootstrap-select/js/bootstrap-select.js"></script>
<script src="plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

<script src="plugins/dropzone/dropzone.js"></script>
 <script src="plugins/jquery-inputmask/jquery.inputmask.bundle.js"></script>
 <script src="plugins/multi-select/js/jquery.multi-select.js"></script>

<script src="plugins/jquery-spinner/js/jquery.spinner.js"></script>
    <script src="plugins/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>
 <script src="plugins/nouislider/nouislider.js"></script>
 <script src="js/pages/forms/advanced-form-elements.js"></script>
<?php include('header.php');?>
<?php

$id = $_GET['id'];
include 'action/check-login.php';
include '../config/db_config.php';
error_reporting(0);

$sql = "SELECT * FROM users WHERE user_id = '$id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
     $fname = $row['fullname'];
	 $uemail = $row['email'];
	 $ugender = $row['gender'];
	 $uphone = $row['phone'];
    }
} else {

}
$conn->close();
?>
 <form action = "action/save-user.php" method= "POST">

                        
                            
                                Full Name:   <div class="form-group form-float">
                                <div class="form-line">
                                 <input type="text"  name="id"  value = " <?php echo $id; ?> "> 	
                          <input type="text" class="form-control" name="fullname"  value = "  <?php echo $fname ?>">
                        </div>
                                </div>
                                         
                             
                                          <div class="form-group form-float">
                                <div class="form-line">
                 Email: <input type="email" class="form-control" name="email"   value = "<?php echo $uemail?>">
                        </div>
                                </div>
                      
                                </div>
                                       <div class="form-group form-float">
                                <div class="form-line">
                     Gender:  <select name="gender" >
            <option>Select one..</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
        </select>
            </div>
                                </div>
                Phone Number : <div class="form-group form-float">
                                <div class="form-line">
                          <input type="text" class="form-control" name ="phone"   value = "  <?php echo $uphone?>">
                        </div>
                                </div>
                                         <center>
                                 <button type="submit" class="btn btn-lg bg-orange waves-effect">
                                    <i class="material-icons">save</i>Save</button>
                                  </center>
                              </form>
        <script src="js/sb-admin-2.js"></script>
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
        <script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>

        <script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>
        <script src="scripts/flot/jquery.flot.resize.js" type="text/javascript"></script>
        <script src="scripts/datatables/jquery.dataTables.js" type="text/javascript"></script>
        <script src="scripts/common.js" type="text/javascript"></script>
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