<?php 
	session_start();
	 include 'conn.inc.php';


if (!isset($_SESSION['username'])) {
	header('location:../../login.php');	
}
 date_default_timezone_set('Asia/Kolkata');
 // echo date_default_timezone_get();




 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Watch Video</title>
 	<link rel="stylesheet" type="text/css" href="java_video.css">
	 <link rel="shortcut icon" type="text/css" href="../..//img/mylogo.png">
 	

 	
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>


	<!----Linking google fonts-->
	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">

	<!----font-awsome start-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

 </head>
 <body id="mybody" class="bg-white">


	
			<!---Navigation Start	----->
<nav class="navbar navbar-expand-lg navbar-light bg-dark fixed-top">
  <a class="navbar-brand text-white" href="#">Videos</a>
  <a class="nav-link text-white" href="../..//index.php">Home</a>
  <a class="nav-link text-white" href="display_video_courses.php">Back<span class="sr-only">(current)</span></a>
</nav>



<br><br><br><br>
<div class="container-fluid">
	<div class="row">
 <section class="col-md-7 mt-8">
		<iframe style="border:10px #999 solid; border-color:lightblue;" width="945" height="600" 
<?php  
		$_SESSION['vid']=$_GET['video_id'];
		$video_id=$_GET['video_id'];
		$sql="select * from videos where video_id='$video_id'";
		$result=mysqli_query($con,$sql);
		while ($row=mysqli_fetch_array($result))
		 {
			?>
			src=<?php echo $row['video_path'];   //fetching youtube video path from database & storing into src attribute
		}

		

		?>
		frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>


		<!---Video iframe Ends	----->

	

</section>
		<!---Comments Section Ends	----->


		<!---Video list Start	----->


	
   
    </tbody>
  </table>
</div>
</div>
</div>

 </body>
 </html>