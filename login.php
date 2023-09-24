<?php

session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<link href="https://fonts.googleapis.com/css?family=Aleo" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
	<title>Student Login</title>
	<!----Linking google fonts-->
	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">

	<!----font-awsome start-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<!----font-awsome ends-->

	<!----css file link-->
	
	<link rel="stylesheet" type="text/css" href="css/login2.css">

	   <!----favicon setting-->
	<link rel="shortcut icon" type="text/css" href="img/mylogo.png">

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<script type="text/css">
	





</script>

</head>
<body>
	
			
			<!---Slider Section starts	------->
			<section class="slider text-center" id="slider">
				<div class="modal-dialog ">
					<header>
						<h1 class="heading">Kale Coaching Classes</h1>
						<h4 class="title">Student Login & Registration</h4>
					</header>
					<div class="modal-content">
						<h3 id="login-heading">Login</h3>
					
					<div class="modal-body" >
						<div class="left-box">
						<form method="POST" action="validation.php" onsubmit="return validation()">
							<div class="form-group">
								<label><i class="fa fa-user fa-2x"></i> Student Username :</label>
								<input type="text" autocomplete="off" name="name" class="form-control" id="username" onkeypress="clear()">
							

								<label><i class="fa fa-lock fa-2x"></i> Password :</label>
								<input type="password" autocomplete="off" name="password" class="form-control" id="password">

								<span id="perror"><?php 
								if(isset($_SESSION['error']))
								{
									echo "wrong username or password";
								} 
								else{ echo " ";} 
								?>
									

								</span>
								<button id="btn-login" type="submit">Login</button>
								
							</div>
							<div class="register">
								<h2>Don't have an account?&nbsp<span id="create-account"><a href="signup.html">Create</span></a> </h2>
								<h2><span id="create-account"><a href="index.html">Go back</span></a> </h2>

							</div>
							
						</form>
					</div>
					<div class="right-box">
						
						<img src="img/mylogo.png" style="width:100%;height:70%;  
						"><br>
						<span class="signinwith"><br>Thank you for <br> Choosing us</span>
					</div>
						
					</div>
					
						
				</div>
			</div>
			</section>
			

			<!---Slider Section ends------->

			<!---confirm password validation Start------->

<script type="text/javascript">
	
function validation() {
	var username=document.getElementById('username').value;
	var password=document.getElementById('password').value;

	if ((username=="") ||( password==""))
	 {
	 	document.getElementById('perror').innerHTML="please fill the details";
	 	return false;
	 }
}


function clear() {
	document.getElementById('perror').innerHTML="ksdfisdhfg";
}

</script>
         <!---confirm password validation end------->

       

<script src="js/jquery.ripples-min.js" type="text/javascript"></script>
<script src="js/typed.min.js" type="text/javascript"></script>

</body>
</html>