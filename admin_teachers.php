<?php
include "connection.php";

 if(isset($_REQUEST['submit'])) 
 {
 	$nm=$_REQUEST['nam'];
 	$tdep=$_REQUEST['tdept'];
 	$tsub=$_REQUEST['teachersubject'];
 	$sex=$_REQUEST['gender'];
 	$age=$_REQUEST['age'];
 	$mail=$_REQUEST['mail'];
 	$pass=$_REQUEST['password'];
 	$address=$_REQUEST['address'];
 	
 	$insert=mysqli_query($conn,"insert into t_reg()values('','$nm','$tdep','$tsub','$sex','$age','$mail','$pass','$address')");
 	
 	if($insert)
 	{
 		echo "<script> alert('Teachers Register Successfully..');</script>";
 	}
 	else
 	{
 		echo "<script> alert('Teachers Register Failed..');</script>";
 	}
 }

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
			/*background-image: url("solid.jpg");*/
			background-color: #5e5eff;
		}
		.form
		{
			height: 400px;
			width: 700px;
			background-color: rgba(0,0,0,0.4);
			margin-left: 330px;


		}
		.frm
		{
			margin-top: -280px;
			margin-left: 420px;
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
		.fm
		{
			margin-top: -350px;
			margin-left: 530px;
		}
		input[type=submit]
		{ height: 30px; 
			width: 120px;
			 font-size: 12px;
			  font-weight: bold;
			   cursor: pointer;
			   background-color: green;
			   margin-left: 20px; 
		}
	.b:hover{ background-color: yellow; color: red; }
	input[type=button]
		{ height: 30px; 
			width: 120px;
			 font-size: 12px;
			  font-weight: bold;
			   cursor: pointer;
			   background-color: #bf40bf; 
		}
	.bt:hover{ background-color: yellow; color: red; }
	a
	{
		text-decoration: none;
	}
	.food
		{
			height: 30px;
			width: 700px;
			background: black;
			margin-left: 330px;
			margin-top: 70px;
			margin-top: -0px;

		}
		 b
       {
       	 font-size: 20px;
       	 font-weight: bold;
       	 color: #ffffc6;
       }
       textarea
	    {
	    	width: 300px;
	    	
	    	font-weight: bold;
	    }
  input[type=radio]
	    {
	    	height: 15px;
	    	width: 15px;
	   color: #ffffc6;
	    }


	    input[type=text]
	    {
	    	height: 30px;
	    	width: 300px;
	           font-weight: bold;
	    }

	     input[type=password]
	    {
	    	height: 30px;
	    	width: 300px;
	        
	        font-weight: bold;
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
	 
	
	<div class="form"></div>

					    <!-- Form Section -->
					    
              <div style="width: 500px; height: 30px; padding-top: 05px; background-color:#00a600; color: white; text-align: center; font-size: 18px; font-weight: bold; margin-left: 420px; margin-top: -400px;">Teachers Register</div>
            <div class="frm">
            	<form name="frm" action="" method="post">
            		<table>

            <tr>
            <td><b>Teacher's Name :</b></td> 
            <td><input type="text" name="nam" value="" placeholder="Please Enter Your Name" required="require"></td>
            </tr>

            <br><br>
            <tr>
            <td><b>Teacher Department :</b></td> 
            <td><input type="text" name="tdept" value="" placeholder="Please Enter Your Department" required="required"></td>
            </tr>

            <br><br>

           	<tr>
            <td><b>Teacher Subject :</b></td> 
            <td><input type="text" name="teachersubject" value="" placeholder="Please Enter Your Subject" required="required"></td>
        </tr>

            <br><br>

            <tr>
            <td><b>Gender :</b></td> 
            <td><input type="radio" name="gender" value="Male" checked=""><b style="color: #ffffc6; font-size: 18px;"> Male</b>  
            <input type="radio" name="gender" value="feale"><b style="color: #ffffc6; font-size: 18px;">Female</b></td>
        </tr>
       
             <br><br>

             <tr>
             <td><b>Age :</b></td> 
            <td><input type="text" name="age" value="" placeholder="Please Enter Your Age" required="require"></td>
        </tr>

            
             <br><br>
             <tr>
            <td><b>E-mail:</b></td> 
            <td><input type="text" name="mail" value="" placeholder="Please Enter Your E-mail" required="require"></td>
        </tr>

            <br><br>
            <tr>
            <td><b>Password:</b></td> 

            <td><input type="password" name="password" value="" placeholder="Please Enter Your password" required="require"></td>
        </tr>


            <br><br>
            <tr>
            <td><b>Address :</b></td> 
            <td><textarea name="address" placeholder="Enter Candidates Address" rows="2" cols="20" required="require"></textarea></td>
        </tr>
        
 
            <br><br>
            <tr><td></td>
            <td><input type="submit" name="submit" value="Register"> 
            	<a href="admin_teacher_show.php"> <input type="button" name="reset" value="Show Teacher"></a></td></tr>
        </table>
           
        </form>
         </div>
 		

    </div>
        	


<div class="food"></div>
</div>
		</body>
</div>
</html>

