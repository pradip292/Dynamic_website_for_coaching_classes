 <!-- navigation bar starts -->

 <nav class="navbar navbar-expand-lg navbar-light bg-dark fixed-top position-relative">  <!--  postion relative to align the tab content  -->
  <a class="navbar-brand text-white" href="#">Kale Coaching Classes</a>
  <a class="nav-link text-white" href="../admin/manage_quiz/manage_quiz.php"> Back <span class="sr-only">(current)</span></a>
  
 
</nav>


        <!-- navigation bar ends -->
<!-- ========================================================================================================================== -->



<?php 

include("class/users.php");
$ques=new users;
$cat= $_POST['selected_course'];
$_SESSION['course_id']=$cat;
echo "<pre>";
$quest_data=($ques->show_questions($cat));

 ?>
<html>
<head>

<link rel="shortcut icon" type="text/css" href="../..//img/mylogo.png"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>







<script type="text/javascript">
  
  function timeout()                            //function to check time out
   {
    var minute=Math.floor(timeleft/60);   
    var second=timeleft%60;
    var min=checkMin(minute);
    var sec=checkSec(second)
    if (timeleft<=0) 
    {
      clearTimeout(tm);                                  //if timeout then stop the timeout function
      document.getElementById("myform").submit();       //if timeout then automatic submit the form
    }
    else
    {
      document.getElementById("timeout").innerHTML=min+":"+sec;   //else diplay the time
    }
    timeleft--;                                                         //decrease time each time
    var tm=setTimeout(function(){timeout()},1000);                      //after each 1 minute the function timeout will called automatically
  }

  function checkSec(second)                   //convert from  0:5 to 0:05
  {
    if (second<10) 
    {
      second="0"+second;
    }
    return second;
  }



  function checkMin(minute)              //convert from  0:20 to 00:20
  {
    if (minute<10) 
    {
      minute="0"+minute;
    }
    return minute;
  }


</script>

</head>


<body onload="timeout()">            <!--   when body load ,timeout functionwill called automatically
   -->


<div class="container position-relative" style="text-align: center; margin-top: -380px;">










	<form action="result_show_admin.php" method="POST" id="myform" style="margin-top: -400px;">
	
 <center><div class="row col-sm-7 ">
  <!--<script type="text/javascript">
      var timeleft=0.1*60;                                   important the scope of javascript variable is global but not in php(we have to use global keyword)

  </script> -->

	<div  style="margin-left:450px;font-size: 15px" id="timeout"></div> 

<?php 

	$i=1;                     //to  display question number
	foreach ($quest_data as  $quest) {
		
 ?>
 <table class="table table-hover table-bordered table-active">
  <thead class="thead-dark">
    <tr>
      <th scope="col"><?php echo $i.'. '; ?><?php echo $quest['question']; ?></th>
    </tr>
  </thead>
  <tbody>
  	<?php if (isset($quest['opt1'])){ ?>     <!--  to check whether the answer is selected or not -->
    <tr>
      <td scope="row" ><input type="radio" value="0" name="<?php echo $quest['id']; ?>"/>&emsp;<?php echo $quest['opt1']; ?></td>
    </tr>
	<?php } ?>
	<?php if (isset($quest['opt2'])){ ?>
      <tr>
      <td scope="row"><input type="radio" value="1" name="<?php echo $quest['id']; ?>"/>&emsp;<?php echo $quest['opt2']; ?></td>
    </tr>
    <?php } ?>
    <?php if (isset($quest['opt3'])){ ?>
    <tr>
      <td scope="row"><input type="radio" value="2" name="<?php echo $quest['id']; ?>"/>&emsp;<?php echo $quest['opt3']; ?></td>
    </tr>
    <?php } ?>
    <?php if (isset($quest['opt4'])){ ?>
    <tr>
      <td scope="row"><input type="radio" value="3" name="<?php echo $quest['id']; ?>"/>&emsp;<?php echo $quest['opt4']; ?></td>
    </tr>
     <?php } ?>

      <tr>
      <td scope="row"><input type="radio" checked="checked" style="display: none;" value="no_attempt" name="<?php echo $quest['id']; ?>"/></td>  <!-- bydefautlt select this if no other answer are selected -->
    </tr>
  </tbody>
</table>
	<?php 
	$i++;        // increment question number by 1
	} 			//loop ends
	?>

</div></center>
	<input type="submit" class="btn btn-success">
</form>
</div>

</body>
</html>