
<?php 

$id = $_GET['id']; ?>


                             <form action ="../../action/new-egg.php" method= "POST">
                                <div class="form-group form-float">
                                <div class="form-line">
                                  Id  : <input type="text" class="form-control" name="id" value = "<?php echo $id; ?>" required autofocus>
                          Egg : <input type="text" class="form-control" name="egg" placeholder="Number of egg" required autofocus>
                        </div>
                                </div>

                                <center>
                                 <button type="submit" class="btn btn-lg bg-orange waves-effect">
                                    <i class="material-icons">save</i>Save</button>
                                  </center>
                            </form>
                     

            
            

  