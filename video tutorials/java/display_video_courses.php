<?php 

include 'conn.inc.php';
include "../../admin/includes/navbar.php";
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Videos</title>
<style type="text/css">
	
		
.card-body
{
	 
	  transition: all 1s ease;
}
.card:hover
	{
		transform: scale(1.05);
	}

.div1                           /* for title image*/
{
	margin-top: 0%;
    position: relative;
    height: 220px;
    width: 724px;
    background:url(online_video_title.jpeg);
}
</style>


</head>
<body>

	 <!-- title image start -->
	<br> <br><br>
	<div class="container-fluid  div1">
		
	</div>
	<!-- title image ends -->


	<!-- video course card starts -->
	<br><br><br>
	<div class="container-fluid">

		<div class="row">
			

<?php 

		$sql="select * from video_info";
		$result=mysqli_query($con,$sql);
		while ($row=mysqli_fetch_array($result))
		 {

		 	?> 
		 	<div class="col-md-4">
				<div class="card shadow" style="width: 18rem; height: 10rem; margin-left: 08px;">
		 	<div class="inner">                                                  <!--  to zoom in and zoom out effect -->
						<img class="card-img-top " style="height: 15rem;"   src=<?php echo $row['image']; ?> alt="Card image cap">
				</div>
  
				  <div class="card-body text-center shadow">
				   <!--  <h5 class="card-title"><?php echo $row['course_name']; ?></h5> -->
				   <!--  <p class="card-text"><?php echo $row['description']; ?></p> -->
				    <a href="display_video_list.php?course_name=<?php echo $row['course_name']; ?>" class="btn btn-primary">watch videos</a>
				  </div>
					</div><br><br><br><br><br><br><br><br><br>

				</div>

			
			<?php } ?>     <!--  while loop closed -->
			
		</div>
		

	</div>

	<!-- video course card ends -->
<!-- 
<?php 

		$sql="select * from video_info";
		$result=mysqli_query($con,$sql);
		while ($row=mysqli_fetch_array($result))
		 {
			?> <button > <a ><?php  echo $row['course_name']; ?></a></button><?php 
		}

		

 ?> -->
<br><br><br><br>



</body>
</html>
