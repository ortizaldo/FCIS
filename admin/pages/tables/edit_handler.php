<!DOCTYPE html>
<html>

<?php include('header.php');?>






<?php

error_reporting(0);
$id = $_GET['id'];
include '../../../config/db_config.php';

$sql = "SELECT * FROM handlers WHERE handler_id = '$id'";
$result = $conn->query($sql);


if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
   
    $handler = $row['handler_name'];
    $contact_person = $row['contact_person'];
    $contact_no = $row['contact_no'];
    $address = $row['address'];
    }
} else {

}
$conn->close();

?>


                         
                            <form action = "../../action/update_handler.php" method= "POST">

                 
                                </div>
								    <input type="hidden" class="form-control" name="id"    value = "<?php echo $id?> ">
                              handler Name:   <div class="form-group form-float">
                                <div class="form-line">
                          <input type="text" class="form-control" name="handler" placeholder="handler Name"  required autofocus   value = "<?php echo $handler?>">
                        </div>
                                </div>
                                         
                             
                                          <div class="form-group form-float">
                                <div class="form-line">
                   Address<input type="text" class="form-control" name="address" placeholder="address of  handler"  value = "<?php echo $address?>">
                        </div>
                                </div>
                                          <div class="form-group form-float">
                                <div class="form-line">
                    Contact Person: <input type="text" class="form-control" name="contact_person"  value = "<?php echo $contact_person?>">
                        </div>
                                </div>
                                <div class="form-group form-float">
                                <div class="form-line">
                      Contact Number :<input type="text" class="form-control" name="contact_no" 
                       value = "<?php echo $contact_no?>">
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