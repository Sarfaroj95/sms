<?php
session_start();

if (isset($_SESSION['sid'])) {

  $sid=$_SESSION['sid'];

include "connection.php";

 if(isset($_REQUEST['submit'])) 
 {
  $nm=$_REQUEST['snam'];
  $cls=$_REQUEST['cnam'];
  $roll=$_REQUEST['rnam'];
  $book=$_REQUEST['bknam'];
  $author=$_REQUEST['atnam'];
  $Withdrol=$_REQUEST['wtnam'];
  $sub=$_REQUEST['sbnam'];
  
  
  $insert=mysqli_query($conn,"insert into library_details()values('','$nm','$cls','$roll','$book','$author','$Withdrol','$sub')");
  
  if($insert)
  {
    echo "<script> alert(' Register Successfully..');</script>";
  }
  else
  {
    echo "<script> alert(' Register Failed..');</script>";
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
			margin-top: -380px;
			margin-left: 460px;
		}
		input[type=submit]
		{ height: 30px; 
			width: 90px;
			 font-size: 12px;
			  font-weight: bold;
			   cursor: pointer;
			   background-color: green;
			   margin-left: 10px; 
		}
	.b:hover{ background-color: yellow; color: red; }
	input[type=reset]
		{ height: 30px; 
			width: 90px;
			 font-size: 12px;
			  font-weight: bold;
			   cursor: pointer;
			   background-color: red; 
			     margin-left: 10px; 
		}
	.bt:hover{ background-color: yellow; color: red; }

	input[type=button]
		{ height: 30px; 
			width: 90px;
			 font-size: 12px;
			  font-weight: bold;
			   cursor: pointer;
			   background-color: green;
			   margin-left: 10px; 
		}
	.b:hover{ background-color: yellow; color: red; }
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
			margin-top: 30px;
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
					    
              <form class="fm" name="frm" action="" method="post">

            <table>
              <tr>
                  <td colspan="2" style="background: #66ff66;height: 30px; font-size: 22px; font-weight: bold; text-align: center; color: #000040; ">
                  Register Must</td>
              </tr>
            <tr>
            <td><b>Student Name :</b> </td>
            <td><input type="text" name="snam" value="" placeholder=" Enter Student Name" required="require"></td>
            </tr>
            <tr>
            <td><b>Class :</b> </td>
            <td><input type="text" name="cnam" value="" placeholder="Enter Student Class" required="require"></td>
            </tr>
            <tr>
            <td><b>Roll No :</b> </td>
            <td><input type="text" name="rnam" value="" placeholder="Enter Student Roll No." required="require"></td>
            </tr>
            <tr>
            <td><b>Book Name :</b> </td>
            <td><input type="text" name="bknam" value="" placeholder="Enter Book Name" required="require"></td>
            </tr>
            <tr>
            <td><b>Author Name :</b> </td>
            <td><input type="text" name="atnam" value="" placeholder="Enter Authoer Name"required="require"></td>
            </tr>
            <tr>
            <td><b>Book Issue :</b> </td>
            <td><input style="height: 30px;
	    	width: 300px;  font-weight: bold;" type="date" name="wtnam" value="" required="require" style="width: 170px;"></td>
            </tr>
            <td><b>Book Submit :</b> </td>
            <td><input style="height: 30px;
	    	width: 300px;  font-weight: bold;" type="date" name="sbnam" value="" required="require" style="width: 170px;"></td>
            </tr>
            <tr>
              <td> </td>

              <td><input type="submit" name="submit" value="Register"> <input type="reset" name="reset" value="Reset"><a href="admin_library_show.php"><input type="button" name="" value="Show List"></a> </td>
            </tr>
        </table>
            
          </form>
        	


<div class="food"></div>
</div>
		</body>
</div>
</html>
<?php
 }
 else
 {
  header("location:admin_login.php?msg=you must login to enter");
 }
?>

