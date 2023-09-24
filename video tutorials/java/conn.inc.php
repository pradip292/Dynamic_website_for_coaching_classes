<?php 
	
	   
	$con=mysqli_connect('localhost','uniquedeveloper','Pradip@1234');
	   if (!$con) {
	   	die('connection failed'.mysqli_connect_error());
	   }

	mysqli_select_db($con,'uniquedeveloper');

 ?>