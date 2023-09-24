<?php 
	session_start();
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Course Details</title>
	<!----css file link-->
	<link rel="stylesheet" type="text/css" href="../..//css/java_programming1.css">
	<link rel="stylesheet" type="text/css" href="../..//css/programming2.css">
	<link rel="shortcut icon" type="text/css" href="../..//img/mylogo.png">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


	<!----Linking google fonts-->
	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Rubik" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Assistant" rel="stylesheet"> 

	<!----font-awsome start-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


	<script src="https://apis.google.com/js/platform.js"></script>


	<style type="text/css">
		#yt
		{
			margin-top: 50px;
		}

		#sidebarleftmenu
		{
				
		}

		body
		{
			

		}



		#mainpagecontent
		{
			background-color: white;
			margin-top: 80px;
			height: auto;
			box-shadow: 5px 5px 5px 5px #ccc; 
			border-color: #ccc;


		}
		.content
		{
			color: black !important;
		}

	</style>
</head>
<body>
		<!------Navigation bar ends ---->
	<nav class="navbar navbar-inverse navbar-fixed-top" style="height: 80px;">
		<div class="container">
			<div class="navbar-header">
				<!------Responsive Button---->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navi">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>


				</button>

				<h1 style="color: white;margin-top: 10px;" id="myhead">Kale coaching Classes</h1>
			</div>
			<div class="collapse navbar-collapse" id="navi">
                 <!------Navigation menus starts---->
				<ul class="nav navbar-nav navbar-right">
					<li><a href="../..//programmingdemo.php" id="our-location1" class="btn-success" > Back </a></li>
					
					<li> <a href="#" id="our-location" class="btn-success" ><?php echo $_SESSION['username'];   ?></a></li>
				</ul>
	                 <!------Navigation menus ends---->
			</div>
		</div>
	</nav>

		<!------Navigation bar ends ---->


		 <!------Side bar start---->


	<div class="sidemenu" id="sidebarleftmenu">
		<ul class="sidemenulist">
				

<?php 
$con=mysqli_connect('localhost','uniquedeveloper','Pradip@1234');
mysqli_select_db($con,'uniquedeveloper');
$course_name=$_GET['course_name'];

//$_GET['course_name'];
// unset($_GET['course_name']);
$q="select * from courses where course_name='$course_name'";
$result=mysqli_query($con,$q);
while ($res=mysqli_fetch_array($result)) {
  ?>
		
  			<form action="fetch_main_content.php" method="POST">

  			<input type="hidden" name="txt1" value="<?php echo $res['id'] ?>">
			<button  style="background-color: transparent;border: none;text-align:left;color: white;"><li style="width: 300px;"><?php echo $res['topic_name']; ?></li></button>

			</form>
			

<?php } ?>

		</ul>
	</div>

		 <!------Side bar ends---->

 		<!------java main content starts ---->

	<div id="mainpagecontent" class="shadow">
		
		<div class="content">
			<p>

			<?php

			if (isset($_SESSION['message'])) {
				echo $_SESSION['message'];
			}

			  ?>
			</p>
		
		</div>
	
	</div>


	
		<!------java main content Ends ---->



		<!------youtube subscribe button starts---->

<div id="yt"  class="g-ytsubscribe" data-channelid="UCxwf74gbHaiHHJ7XxZ51JyA" data-layout="full" data-count="default"></div>


 <script type="text/javascript">
 	
 	var li=document.getElementsByTagName('li')[0].style="color:red";
 </script>

</body>
</html>