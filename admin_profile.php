
<?php

session_start();
 
 include "connection.php";

 if (isset($_SESSION['sid'])) 
 {
   $sid=$_SESSION['sid'];
 

?>

<!DOCTYPE html>
<html>
<head>
	<title>Admission Form</title>
	<link rel="stylesheet" type="text/css" href="">
	<link rel="stylesheet" type="text/css" href="button2.css">
	<style type="text/css">
		.header
		{
			height: 70px;
			width: 700px;
			background-color: green;
			margin-left: 330px;
			margin-top: 50px;
			
			
		}
		.header_logo
		{
				float: left;
				margin-left: 50px;
		}
		.header_name
		{
			float: right;
			font-size: 30px;
			margin-top: -50px;
			margin-right: 500px;
			font-weight: bold;
			
		}
		.admin
		{
			height: 30px;
			width: 700px;
			background: black;
			margin-left: 330px;
			color: white;
			font-size: 20px;
			text-align: center;

		}
		.back
		{
			background-image: url("solid.jpg");
			/*background-color: #ffffc6;*/
		}
		.form
		{
			height: 450px;
			width: 700px;
			background-color: rgba(0,0,0,0.4);
			margin-left: 330px;

		}
		.tab
		{
			margin-left: 150px;
			padding-top: 20px;
		}
		.in
		{
			font-size: 20px;
			font-weight: bold;
			margin-left: 

		}

		.name
		{
			font-size: 15px;
			margin-left: 10px;
		}
		.sk
		{
			font-size: 15px;
		}
		.sub
		{
			padding-top: 100px;
		}


		/*form section*/
		#head
	    {
	    	font-size: 25px;
	    	font-weight: bold;
	    	height: 40px;
	    	width: 300px;
	    	border-style: inset;
	    	/*border-color: red;*/
	    	text-align: center;
	    	background-color: green;
	    	color: white;
	    	padding-top: 10px;
	    	
	    	
	    	/*margin-left: 550px;
            margin-top: 100px;*/
	    }
		#st
		{
			font-weight: bold;
			color: black;
			height: 150px;
			width: 300px;
			border-style: inset;
			border-color: green;
			border-bottom-right-radius: 5px;
			background-color: #408080;
			/*padding-top: 10px;
			margin-left: 550px;*/
			

		}
		.in
		{
			margin-left: 60px;
			margin-top: 6px;
			text-decoration: 5px;
			font-size: 14px;
		}
		.frm
		{
			margin-left: 0px;

		}
		input[type=submit]
		{ height: 30px; 
			width: 60px;
			 font-size: 12px;
			  font-weight: bold;
			   cursor: pointer;
			   background-color: green;
			   margin-left: 80px; 
		}
	.b:hover{ background-color: yellow; color: red; }
	input[type=reset]
		{ height: 30px; 
			width: 60px;
			 font-size: 12px;
			  font-weight: bold;
			   cursor: pointer;
			   background-color: red; 
		}
	.bt:hover{ background-color: yellow; color: red; }
	a
	{
		text-decoration: none;
	}

	</style>
</head>
<body class="back">


	<div class="header">

	<div class="header_logo"><a href="admin_profile.php"> <img src="slicon.png" style="width: 50px; height: 50px; margin-top: 10px;"></a></div>


	<div class="header_beack"> <a href="logout_add.php"><img src="logouts.png" style="margin-left: 550px; margin-top: 25px;"></a></div>
	</div>

	<div class="header_name">School Management System</div>

	<div class="admin"> ---Admin Section---</div>
	 
	
	<div class="form">

					    <!-- Form Section -->

							<!-- left div -->
<div class="btn-group">
  
  <a href="admin_library.php"><input type="button" class="button" name="" value="Library"></a>
  <a href="admin_atendance.php"><input type="button" class="button" name="" value="Attendance"></a>
  <a href="admin_teachers.php"><input type="button" class="button" name="" value="Teachers"></a>
<a href="notice_admin.php"><input type="button" class="button" name="" value="Notice"></a>

<a href="#"><input type="button" class="button" name="" value="Result"></a>

<a href="admin_report_show.php"><input type="button" class="button" name="" value="Report"></a>
    
</div>
						<!-- mid Div -->

<div style="height: 200px; width: 300px; background-color: white;
margin-left: 200px; margin-top: -330px;"><img src="admin_scl.jpg" style="height: 200px; width: 300px;"> </div>


         						<!-- Right Div -->

<div class="btn-group" style="margin-left: 550px; margin-top: -290px;">
  
  <a href="tab_five.php"><input type="button" class="button" name="" value="Class-V"></a>

  <a href="tab_six.php"><input type="button" class="button" name="" value="Class-VI"></a>

  <a href="tab_seven.php"><input type="button" class="button" name="" value="Class-VII"></a>

<a href="tab_eight.php"><input type="button" class="button" name="" value="Class-VIII"></a>

<a href="tab_nine.php"><input type="button" class="button" name="" value="Class-IX"></a>

<a href="tab_ten.php"><input type="button" class="button" name="" value="Class-X"></a>
</div>

						<!-- end div -->
<div class="admin" style="margin-left: -0px;"></div>

</div>				
</div>
		
</body>
</div>
</html>
<?php
  }
  else
  {
    header("location:admin_login.php?msg=You must login to enter!");
  }
?>

