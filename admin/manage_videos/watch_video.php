<?php
  $con=mysqli_connect('localhost','uniquedeveloper','Pradip@1234');

  mysqli_select_db($con,'uniquedeveloper');
    require 'comments.inc.php';      //including comment code
?>
<!DOCTYPE html>
<html>
<head>
  <title></title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<link rel="shortcut icon" type="text/css" href="img/mylogo.png">

<!-- google font -->
 <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
 <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
 <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">

   <!--  font awsome cdn -->
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

 <style type="text/css">
  

    .sidebar-list
    {
        margin-right: -15px;
        
        font-family: 'Quicksand', sans-serif; 
        font-size: 14px
    }

    .sidebar-list li:hover
    {
      background-color: deepskyblue !important;
    }
     .sidebar-list li a
     {
        color:white;
        text-decoration: none;
     }
 </style>
</head>

<body>
  
<!-- navigation bar starts -->

<nav class="navbar navbar-expand-lg navbar-light bg-dark fixed-top position-relative">  <!--  postion relative to align the tab content  -->
  <a class="navbar-brand text-white" href="#">Kale Coaching Classes</a>
 
</nav>


        <!-- navigation bar ends -->
<!-- ========================================================================================================================== -->



 <div class="container-fluid" style="margin-top: -8px;" >
      <div class="row">
<!-- ========================================================================================================================== -->

<!-- sidebar starts -->



<div class="container-fluid" style="margin-top: 5px;" >
      <div class="row">
        <div class="col-sm-2 col-md-2 sidebar badge-dark" style="margin:inherit;" id="sidebar" >
         <ul class="list-group text-white sidebar-list">
            <li class="list-group-item bg-dark "><a href="../admin_main.php">Welcome Admin</a></li>
            <li class="list-group-item bg-dark  "><a href="../manage_courses/manage_courses.php">Manage Courses</a></li>
            <li class="list-group-item bg-dark"><a href="../manage_quiz/manage_quiz.php">Manage Quize</a></li>
            <li class="list-group-item bg-dark"><a href="../manage_videos/manage_videos.php">Manage Videos</a></li>
            <li class="list-group-item bg-dark"><a href="../manage_videos/manage_videos.php">Back</a></li>

            <li class="list-group-item bg-dark"><a href="../..//login.php">Logout</a></li>
            
          </ul>
          <li class="list-group-item bg-dark" style="height: 1000px;"></li>
        </div>


        <!-- sidebar ends -->

  <!-- ========================================================================================================================== -->



      <div class="col-md-10 ">   <!--  main body content starts -->
        <br>
        <h3 class="text-center mt-2">Watch your <?php  echo $_GET['course_name'];  ?> video</h3><br>
        <div class="row  ml-2">
       
      <section class="col-md-7 mt-4">
    
    
    <iframe style="border:10px #999 solid; margin-top: -30px;border-radius:10px; border-color:lightblue;" width="760" height="415"
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


    <!---Video iframe Ends  ----->


   

  </section> 
      



      
       </div>




    </div>
  </div>
  </div>


<body>  
</html>