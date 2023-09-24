<?php


session_start();

if (!isset($_SESSION['username'])) {
	header('location:login.php');
	# code...

}

?>


<!DOCTYPE html>
<html>
<head>
	<link href="https://fonts.googleapis.com/css?family=Aleo" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
	<title>Student Dashboard</title>
	<!----magnific popup css file for work section -->
	<link rel="stylesheet" type="text/css" href="css/magnific-popup.css">

	<!----owlcarousel css file for our team section -->
	<link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
	<link rel="stylesheet" type="text/css" href="css/owl.theme.default.min.css">


	<!----Linking google fonts-->
	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">

	<!----font-awsome start-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<!----font-awsome ends-->

		<!----css file link-->
	<link rel="stylesheet" type="text/css" href="css/style2.css">

	   <!----favicon setting-->
	<link rel="shortcut icon" type="text/css" href="img/mylogo.png">

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!----magnific popup js file for work section -->
	<script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>

	<!----owlcarousel js file for our team section -->
	<script type="text/javascript" src="js/owl.carousel.min.js"></script>
	<script type="text/javascript" src="js/owl.carousel.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<style type="text/css">
	
	.servicebody
	{
		

	}


	html
	{
		scroll-behavior: smooth;
	}
	</style>

</head>
<body onload="myfunction()">
		   <!---preloader starts	----->

		   <div id="loading"></div>

		   <!---preloader Ends	----->


			<!---Navigation Starts	----->

	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<!------Responsive Button---->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navi">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>


				</button>

				<h1 style="color: white;margin-top: 7px; margin-right: 7px;" id="myhead">Kale coaching Classes</h1>
			</div>
			<div class="collapse navbar-collapse" id="navi">
                 <!------Navigation menus starts---->
				<ul class="nav navbar-nav navbar-right">
					<li> <a href="#" style=" margin-top:7px;">Home</a></li>
					<li> <a href="#myservice_section" style=" margin-top:7px;" >Study</a></li>
					<li> <a href="#our-members" style=" margin-top:7px;">Teachers</a></li>
					<li> <a href="#" id="our-location" class="btn-success" style="margin-left:100px;margin-top:7px;" ><?php echo $_SESSION['username']; ?></a></li>
					<li> <a href="logout.php" id="our-location" class="btn-success" style="margin-left:25px; margin-top:7px;" >Logout</a></li>

				</ul>
	                 <!------Navigation menus ends---->
			</div>
		</div>
	</nav>
			<!---Navigation Ends	----->

			<!---Slider Section starts	------->
			<section class="slider text-center" id="slider">
				<div class="slider-overlay" >
					<div class="slider-content">
						
						<div class="text">      <!-- jquery typed effect -->
						</div>
							<div class="cta-div">
								<a href="index.html#contactsection" class="btn1">CONTACT US</a>
								<a href="#myservice_section" class="btn2">LEARN TODAY</a>
							</div>
							<br><br>
							<div class="social-networks">
								<a href="https://www.facebook.com/profile.php?id=100091981150261" class="fa fa-facebook"></a>
								<a href="https://youtube.com/@KaleCoachingClasses-ym7fn" class="fa fa-youtube"></a>
								<a href="https://instagram.com/kaleclasses5345?igshid=ZDdkNTZiNTM=" class="fa fa-instagram"></a>
								<a href="https://www.linkedin.com/in/kale-classes-8515b2273?trk=contact-info" class="fa fa-linkedin"></a>
							</div>
					</div>
				</div>
			</section>

			<!---Slider Section ends------->

			
	
		</div>

         <!---Our Services Section Start------->

         <br><br>
         <div class="container-fluid servicebody" id="myservice_section" style="margin-top: -100px;">
         <div class="service-are" id="service">
         	<div class="row">
         		<div class="col-xs-12">
         			<div class="section-title text-center">
						<br></br>
						<br></br>
						
         				<h1><b>STUDY</b></h1>
         				<p>
						 Enjoy the learning experience !

         				</p>
         			</div>
         		</div>
         	</div>
         	<div class="row">
         		<div class="col-md-4 col-sm-6 col-xs-12">
				 	<a href="programmingdemo.php" > 
         			<div class="service-wrap text-center">
         				<div class="service-icon">
         					<i class="fa fa-leaf"></i>
         				</div>
						 
         				<h3><a href="programmingdemo.php" > COURSES</a></h3>
         				<p>
						 You can access all of the lecture lessons for your courses right here.

         				</p>
         			</div>
         		</div>

         		<div class="col-md-4 col-sm-6 col-xs-12">
				 <a href="video tutorials\java\display_video_courses.php">
         			<div class="service-wrap text-center">
         				<div class="service-icon">
         					<i class="fa fa-laptop"></i>
         				</div>
         				<h3><a href="video tutorials\java\display_video_courses.php">VIDEO TUTORIALS</a></h3>
         				<p>
						 All of the videos that correspond to your courses can be found here.

         				</p>
         			</div>
         		</div>

         		<div class="col-md-4 col-sm-6 col-xs-12">
				 <a href="online_quize/quizhome.php">
         			<div class="service-wrap text-center">
         				<div class="service-icon">
         					<i class="fa fa-file"></i>
         				</div>
         				<h3><a href="online_quize/quizhome.php">EXERCISE</a></h3>   <!--  exercise/exercise.php -->
         				<p>
						 You are able to practice using these problem-solving tools here, and you can also use them to improve your skills.

         				</p>
         			</div>
         		</div>

         	</div>
         </div>
     </div>

			<!---Our Services Section Ends------->

			<!-- <section class="work" id="work"><br><br></br>
						<br></br>
						
				<h2 id="work-heading" class="text-center" style="font-weight: bold ;">Our Courses</h2>
				
				<p class="text-center">join us to improve your works join us to improve your works</p>
				<br>
				<div class="container-fluid">
					<!---first row start-->
					<!-- <div class="row no-gutters">
					<div class="col-md-3 col-sm-3 col-xs-3">
						<div class="img-wrapper">
							<a href="img/work1.jpg" title="SSC Board">
								<img src="img/work1.jpg" class="img-responsive">
							</a>
							
						</div>
						
					</div>

					<div class="col-md-3 col-sm-3 col-xs-3">
						<div class="img-wrapper">
							<a href="img/work2.jpg" title="HSC Board">
								<img src="img/work2.jpg" class="img-responsive">
							</a>
							
						</div>
						
					</div>

					<div class="col-md-3 col-sm-3 col-xs-3">
						<div class="img-wrapper">
							<a href="img/work3.jpg" title="9th class">
								<img src="img/work3.jpg" class="img-responsive">
							</a>
							
						</div>
						
					</div>

					<div class="col-md-3 col-sm-3 col-xs-3">
						<div class="img-wrapper">
							<a href="img/work4.jpg" title="11th class">
								<img src="img/work4.jpg" class="img-responsive">
							</a>
							
						</div>
						
					</div>


					
					<!---first row ends-->


					<!-------second row starts  --->
					
					<!-- <div class="col-md-3 col-sm-3 col-xs-3">
						<div class="img-wrapper">
							<a href="img/work5.jpg" title="MHT-CET (PCM)">
								<img src="img/work5.jpg" class="img-responsive">
							</a>
							
						</div>
						
					</div>

					<div class="col-md-3 col-sm-3 col-xs-3">
						<div class="img-wrapper">
							<a href="img/work6.jpg" title="MHT-CET (PCB)">
								<img src="img/work6.jpg" class="img-responsive">
							</a>
							
						</div>
						
					</div>

					<div class="col-md-3 col-sm-3 col-xs-3">
						<div class="img-wrapper">
							<a href="img/work7.jpg" title="NEET">
								<img src="img/work7.jpg" class="img-responsive">
							</a>
							
						</div>
						
					</div>

					<div class="col-md-3 col-sm-3 col-xs-3">
						<div class="img-wrapper">
							<a href="img/work8.jpg" title="JEE">
								<img src="img/work8.jpg" class="img-responsive">
							</a>
						</div>	
					</div>
					<!---second row ends-->
					
				<!--</div>
			</section>	-->

			<!---Our Services Section Ends------->

			<!---Our Team Section Start------->
			<br><br><br>
			<div class="container text-center" id="our-members">
					
				<h2><b>Teachers</b></h2>
				<p>
				These are our top-notch teachers;<br>you can get in touch with them at any moment .
				</p>
				<br>
			</div>


			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div id="team-memebers" class="owl-carousel owl-theme">
							<div class="team-member text-center">
								<img src="img/kales.jpg" class="img-responsive">
								<div class="team-member-info text-center">
									<h4 class="team-member-name">Dr. Sandip Kale</h4>
									<h4 class="team-member-designation">Founder (Math Professor)</h4>
									
								</div>
							</div>


							<div class="team-member text-center">
								<img src="img/mam.jpg" class="img-responsive">
								<div class="team-member-info text-center">
									<h4 class="team-member-name">Prof. Varsha Kale</h4>
									<h4 class="team-member-designation">Co-founder</h4>
									
								</div>
							</div>


							<div class="team-member text-center">
								<img src="img/ksir.jpg" class="img-responsive">
								<div class="team-member-info text-center">
									<h4 class="team-member-name">Prof.Aniket Kothaval</h4>
									<h4 class="team-member-designation">Physics Professor</h4>
									
								</div>
							</div>


							<div class="team-member text-center">
								<img src="" class="img-responsive">
								<div class="team-member-info text-center">
									<h4 class="team-member-name">------</h4>
									<h4 class="team-member-designation">--------</h4>
									
								</div>
							</div>


							<div class="team-member text-center">
								<img src="" class="img-responsive">
								<div class="team-member-info text-center">
									<h4 class="team-member-name">------</h4>
									<h4 class="team-member-designation">-----</h4>
									
								</div>
							</div>







						</div>
					</div>
				</div>
			</div>

 			<!---footer Section Start	----->
			<div>
				<br>
				<h3><center>Thanks for visiting .</center></h3>
				<br>
			</div>


 			<!---footer Section Ends	----->



  			<!---This is script section------->

<script type="text/javascript">
	
	var preloader=document.getElementById('loading');
	function myfunction()
	 {
		preloader.style.display='none';
	}


	function addButton() {
		var body=document.getElementsByTagName('body')[0];
		var myfaq1=document.getElementById('myfaq');
		var btn=document.createElement('button');
		btn.innerHTML='sunil';
		myfaq1.appendChild(btn);
		body.appendChild(myfaq);
	}



</script>

<script src="js/jquery.ripples-min.js" type="text/javascript"></script>
<script src="js/typed.min.js" type="text/javascript"></script>
<script src="js/main.js" type="text/javascript"></script>

</body>
</html>