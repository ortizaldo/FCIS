<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Breeders</title>
  <link href='bootstrap/login/css/font.css' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="bootstrap/login/css/normalize.min.css">

  
      <link rel="stylesheet" href="bootstrap/login/css/style.css">

  
</head>
<style>
.bar 
{ 
  background-color: #819FF7; 
  width:0%; 
  height:5px; 
  border-radius: 3px; 
}
.percent 
{ 
  position:absolute; 
  display:inline-block; 
  top:3px; 
  left:48%; 
}
#wrapper
{
  width:995px;
  padding:0px;
  margin:0px auto;
  font-family:helvetica;
  text-align:center;
}



</style>

<body>
<div class='progress' id="progress_div">
    <div class='bar' id='bar1'></div>
    <div class='percent' id='percent1'></div>
  </div>
  <input type="hidden" id="progress_width" value="0">
  <div class="form">

      <ul class="tab-group">


	        	
		
        <li class="tab active"><a href="#">  <h3 style = "color:white;text-align: left;" >
		<?php $date = new DateTime();
           echo $date->format(' F j, Y'); ?></li>
		   </h3> </a></li>
        <li class="tab"><a href="#"> <h3 style = "color:white;text-align: right;" id =tick2>
							 </h3></a></li>
      </ul>
      
      <div class="tab-content">
	        <div id="login">   
          
          
          <form action="action/login.php" method="POST">
          
		 
            <div class="field-wrap">
            <input type="text" id="inputEmail" placeholder="Username" name="username" autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
     
            <input type="password" id="inputPassword" placeholder="Password" name="password" autocomplete="off"/>
  <input type="hidden" name = "role" value = "shops">  
					
		
          </div>
          
          
          <button class="button button-block"/>Log In</button>
          
          </form>

        </div>
        <div id="signup">   
          <?php
					
								  
								if(isset($_GET['err'])) {
									print '
									<div class="alert alert-danger">
										<button type="button" class="close" data-dismiss="alert">×</button>
										'.$_GET['err'].' 
									</div>
									';
								}else{
									
								}
								
								if(isset($_GET['in'])) {
									print '
									<div class="alert alert-success">
										<button type="button" class="close" data-dismiss="alert">×</button>
										'.$_GET['in'].' 
									</div>
									';
								}else{
									
								}
								?>
          
          <form action="action/new-shop.php" method="POST">
          


          <div class="field-wrap">
          
            <input type="email" id="txt_firstCapital"   placeholder = " Email Address" id="inputEmail" name = "email" required autocomplete="off"/>
          </div>
          
		   <div class="field-wrap">
            <input type="text" id="txt_firstCapital"  placeholder = " Shop Name"  name="shopname" required autocomplete="off"/>
          </div>
                <div class="top-row">
            <div class="field-wrap">
         			<select  name="currency" required>
								<option value="">Please select currency</option>
								<?php
								include 'config/db_config.php';
								
								$sql = "SELECT * FROM countries ORDER BY currency";
                               $result = $conn->query($sql);

                              if ($result->num_rows > 0) {

                                  while($row = $result->fetch_assoc()) {
		
                               print '<option value="'.$row['iso'].'">'.$row['currency'].' - '.$row['iso'].'</option>';
                                     }
                                  } else {

                                       }
                                     $conn->close();
								?>
							
								</select>
            </div>
        
            <div class="field-wrap">
           	<select  name="timezone"  required>
								<option value="">Select Timezone</option>
									<?php
								include 'config/db_config.php';
								
								$sql = "SELECT * FROM timezones  WHERE continet = 'Asia' ORDER BY timezone";
                               $result = $conn->query($sql);

                              if ($result->num_rows > 0) {

                                  while($row = $result->fetch_assoc()) {
		
                               print '<option value="'.$row['timezone'].'">'.$row['timezone'].'</option>';
                                     }
                                  } else {

                                       }
                                     $conn->close();
								?>
							
								</select>
              
            </div>
          </div>
		  <div class="field-wrap">
    
            <input type="password" id="password" placeholder="Password" name="password" autocomplete="off"/>
          </div>
          <div class="field-wrap">
     
            <input type="password" id="confirm_password" placeholder="Confirm Password" name="password2" required autocomplete="off"/>
          </div>
          															<script>
							document.onreadystatechange = function(e)
{
  if(document.readyState=="interactive")
  {
    var all = document.getElementsByTagName("*");
    for (var i=0, max=all.length; i < max; i++) 
    {
      set_ele(all[i]);
    }
  }
}

function check_element(ele)
{
  var all = document.getElementsByTagName("*");
  var totalele=all.length;
  var per_inc=100/all.length;

  if($(ele).on())
  {
    var prog_width=per_inc+Number(document.getElementById("progress_width").value);
    document.getElementById("progress_width").value=prog_width;
    $("#bar1").animate({width:prog_width+"%"},10,function(){
      if(document.getElementById("bar1").style.width=="100%")
      {
        $(".progress").fadeOut("slow");
      }			
    });
  }

  else	
  {
    set_ele(ele);
  }
}

function set_ele(set_element)
{
  check_element(set_element);
}										
																	
																	
																	
																	
																	
																	
																	
																	
																	
																	
																	
																	
																	
																	
																	
																	
																	
																	
																	
																	
																	
																	
																	
																	
																	
																	
																	
																	
																	
																	
																	
																	
	var password = document.getElementById("password")
  , confirm_password = document.getElementById("confirm_password");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("the password you type did not match to the first you type in short ma break man kamo dyafon");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;
</script>
          <button type="submit" class="button button-block"/>Get Started</button>
          
          </form>

        </div>
        
  
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->

 <script>
	function show2(){
		if (!document.all&&!document.getElementById)
		return
		thelement=document.getElementById? document.getElementById("tick2"): document.all.tick2
		var Digital=new Date()
		var hours=Digital.getHours()
		var minutes=Digital.getMinutes()
		var seconds=Digital.getSeconds()
		var dn="PM"
		if (hours<12)
		dn="AM"
		if (hours>12)
		hours=hours-12
		if (hours==0)
		hours=12
		if (minutes<=9)
		minutes="0"+minutes
		if (seconds<=9)
		seconds="0"+seconds
		var ctime=hours+":"+minutes+":"+seconds+" "+dn
		thelement.innerHTML=ctime
		setTimeout("show2()",1000)
		}
		window.onload=show2
				//-->
</script>
	<script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
	<script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
	<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
  <script src='bootstrap/login/js/jquery.min.js'></script>

    <script src="bootstrap/login/js/index.js"></script>

</body>
</html>
