<?php
include "connection.php";

if(isset($_POST['sub']))
{
   
   $id=$_GET['id'];
   $title=$_POST['title'];
   $dat=$_POST['dat'];
   $contain=$_POST['contain'];

   $update=mysqli_query($conn,"update notice set title='$title', dat='$dat', contain='$contain' where id='$id'");

   if($update)
   {
   	echo "<script>alert('Success');
		window.location.href='notice_show.php';</script>";
   }
   else
   {
   	 echo "<script>alert('Unsuccess')</script>";
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
			margin-top: -350px;
			margin-left: 500px;
		}
		input[type=submit]
		{ height: 30px; 
			width: 150px;
			 font-size: 12px;
			  font-weight: bold;
			   cursor: pointer;
			   background-color: green;
			   margin-left: 70px; 
		}
	.b:hover{ background-color: yellow; color: #6300c6; }
	input[type=button]
		{ height: 30px; 
			width: 60px;
			 font-size: 12px;
			  font-weight: bold;
			   cursor: pointer;
			   background-color:#fd5200; 
		}
	.bt:hover{ background-color: yellow; color: #6300c6; }
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
			margin-top: 20px;

		}
		b
		{
			color: white;
		}
	


	
	</style>
</head>
<body class="back">


<?php
include "connection.php";

$qer=mysqli_query($conn,"select * from notice");
$res=mysqli_fetch_assoc($qer);






?>

	<div class="header">

	<div class="header_logo"><a href="admin_profile.php"> <img src="slicon.png" style="width: 50px; height: 50px; margin-top: 10px;"></a></div>


	<div class="header_beack"> <a href="logout_add.php"><img src="logouts.png" style="margin-left: 550px; margin-top: 25px;"></a></div>
	</div>

	<div class="header_name">School Management System</div>

	<div class="admin"> ---Admin Section---</div>
	 
	
	<div class="form"></div>

					    <!-- Form Section -->
					    
              <form class="fm" name="frm" action="" method="post">

            <table border="2">
              <tr>
                  <td colspan="2" style="background: #66ff66;height: 30px; font-size: 22px; font-weight: bold; text-align: center; color: #000040; ">
                  Notice</td>
              </tr>
         <tr>
            <td><b>Title:</b> </td>
            <td><input type="text" value="<?php echo $res['title']; ?>" name="title" value="" placeholder="Enter Title." required="require" style="width: 300px;height: 25px; font-size: 14px;"></td>
            </tr>
             <tr>
            <td><b>Date:</b> </td>
            <td><input type="date" value="<?php echo $res['dat']; ?>" name="dat" value="" required="require" style="width: 300px;height: 25px;font-size: 14px;
          color: #004080;"></td>
            </tr>
            <tr>
            <td ><b>Contain:</b> </td>
            <td><textarea rows="8" cols="35" style="font-size: 14px;" name="contain"> <?php echo $res['contain']; ?>" </textarea></td>
          </tr>
           

            <tr>
              <td></td>

              <td><input type="submit" name="sub" value="Update" class="b">
              
            </tr>

        </table>
            
          </form>
        	


<div class="food"></div>
</div>
		</body>
</div>
</html>

