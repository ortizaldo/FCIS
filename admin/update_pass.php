<!DOCTYPE html>
<html>

<?php include('header.php');?>


<?php
error_reporting(0);
include 'action/check-login.php';
include 'alerts.php';

include '../config/db_config.php';

$sql = "SELECT * FROM shops where shop_id = '$SEshop_id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
    $username = $row['shop_username'];
	$pass = $row['shop_password'];
	$password = base64_decode("$pass");
    }
} else {
 
}
$conn->close();

?>



     

                            <form action="action/new-password.php" method= "POST">
                                <div class="form-group form-float">
                                <div class="form-line">



                          Username<input type="text" class="form-control" name="username" required value="<?php echo"$username"; ?>"  required autofocus>
                        </div>
                                </div>
                                          <div class="form-group form-float">
                                <div class="form-line">
                         Password<input type="password" class="form-control" name="password" required value="<?php echo "$password";  ?>" >
                        </div>
                                </div>
                                          
                               
                                <br>
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