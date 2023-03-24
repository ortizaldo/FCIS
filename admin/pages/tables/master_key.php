<!DOCTYPE html>
<html>

<?php include('header.php');?>



                            <form action ="../../action/key.php" method= "POST">
                                <div class="form-group form-float">
								<center><h1>Master Key</h1></center>
                                <div class="form-line">
							<input type="hidden" class="form-control" name="id" value = "<?php echo $_GET['id'];?>"placeholder="Input master key to view username and password" required autofocus>
                          <input type="password" class="form-control" name="key" placeholder="Input master key to view username and password" required autofocus>
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