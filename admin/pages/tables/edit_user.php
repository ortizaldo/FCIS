<!DOCTYPE html>
<html>

<?php include('header.php');?>






<?php

error_reporting(0);
$id = $_GET['id'];
include '../../../config/db_config.php';

$sql = "SELECT * FROM users WHERE user_id = '$id'";
$result = $conn->query($sql);


if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
   
    $fullname = $row['fullname'];
    $phone = $row['phone'];
    $email = $row['email'];
	$gender = $row['gender'];
    }
} else {

}
$conn->close();

?>


                         
                            <form action = "../../action/update_users.php" method= "POST">

                 
                                </div>
								    <input type="hidden" class="form-control" name="id"    value = "<?php echo $id?> ">
                              Full Name:   <div class="form-group form-float">
                                <div class="form-line">
                          <input type="text" class="form-control" name="fullname" placeholder="Supplier Name"  required autofocus   value = "<?php echo $fullname?>">
                        </div>
                                </div>
                                         
                             
                                          <div class="form-group form-float">
                                <div class="form-line">
                  Email:<input type="email.com" class="form-control" name="email" placeholder="address of your of you supplier"  value = "<?php echo $email?>">
                        </div>
                                </div>
                                          <div class="form-group form-float">
                                <div class="form-line">
                    Phone: <input type="number" class="form-control" name="phone"  value = "<?php echo $phone?>">
                        </div>
                                </div>
								  <div class="form-group form-float">
                                <div class="form-line">
                     Gender:  <select name="gender" >
            <option value = "<?php echo $gender;?>"><?php echo $gender;?></option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
        </select>
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