<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>User Login</title>
	<link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link type="text/css" href="css/theme.css" rel="stylesheet">
	<link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
	<link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
	<link rel="icon" href="images/icon.png">
</head>
<body>

	<div class="navbar navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
					<i class="icon-reorder shaded"></i>
				</a>

			

				<div class="nav-collapse collapse navbar-inverse-collapse">
				
					<ul class="nav pull-right">

						<li><a href="register-shop.php">
							Admin Registration
						</a></li>

						

					
					</ul>
				</div>
			</div>
		</div>
	</div>



	<div class="wrapper" style="background-image: url(images/back.jpg);">
		<div class="container" >
			<div class="row">
				<div class="module module-login span4 offset4">
					<form class="form-vertical" action="action/login.php" method="POST">
						<div class="module-head">
						   
							<h3 style  = "text-align: center;">Sign In</h3>
						</div>
						<div class="module-head">
						  <h3 class = "pull-right" id =tick2>
							 </h3>
		

   <h3  style = "aling-text:center;">
       	<?php $date = new DateTime();
           echo $date->format(' F j, Y'); ?>
</h3>
						</div>
						

						<div class="module-body">
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
							<div class="control-group">
								<div class="controls row-fluid">
									<input class="span12" type="text" id="inputEmail" placeholder="Username" name="username" required>
								</div>
							</div>
							<div class="control-group">
								<div class="controls row-fluid">
									<input class="span12" type="password" id="inputPassword" placeholder="Password" name="password" required>
								</div>
							</div>
							
													<div class="control-group">
								<div class="controls row-fluid">
								<select name="role" class="span12">
								<option value="shops">Administrator (Manager) </option>
								<option value="users">Staff</option>
								</select>
								
								</div>
							</div>
						</div>
						<div class="module-foot">
							<div class="control-group">
								<div class="controls clearfix">
									<button type="submit" class="btn btn-primary pull-right">Login</button>
								
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

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
	
</body>
</html>