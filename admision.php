
<?php

 include "connection.php";

 if (isset($_REQUEST['submit'])) 
 {
 	$name=$_REQUEST['nm'];
 	$fname=$_REQUEST['fname'];
 	$mname=$_REQUEST['mname'];
 	$gender=$_REQUEST['gender'];
 	$bengali=$_REQUEST['bengali'];
 	$english=$_REQUEST['english'];
 	$math=$_REQUEST['math'];
 	$geo=$_REQUEST['geo'];
 	$life=$_REQUEST['life'];
 	$physics=$_REQUEST['physics'];
 	$total=$_REQUEST['tot'];
  $email=$_REQUEST['email'];
 	$dob=$_REQUEST['dob'];
 	$add=$_REQUEST['address'];
 	

 	$insert=mysqli_query($conn,"insert into student_admission()values('','$name','$fname','$mname','$gender','$bengali','$english','$math','$geo','$life','$physics','$total','$email','$dob','$add')");
 	if($insert)
 	{
 		echo "<script> alert('Admission Successfully..');</script>";
 	}
 	else
 	{
 		echo "<script> alert('Admission Failed..');</script>";
 	}

 }



?>



<!DOCTYPE html>
<html>
<head>
	<title>Home-SMS</title>


	<style type="text/css">

	                 /*Header section*/

		.header_left
		{
			height: 80px;
		    width: 1004px;
		    background-color: skyblue;
		
			margin-left: 170px;
		
	    }

                       /*Header Logo Section*/

	    .header_img
	    {
	    	margin-left: 50px;
	    }

	                        /*Right Section Logo*/

	    .header_right
	    {
          margin-left: 400px;
	    }
                       
                       /*Body Section*/

	    .body
	    {
	    	width: 1000px;
	    	height: 800px;
	    	margin-left: 170px;
	  		border: 2px solid black;
	    	background-color: white;

	    	border-bottom-left-radius: 10px;
	    	border-bottom-right-radius: 10px;
	    }
	    

	                     /*Marquee Section*/

	    .menu
	    {
	    	background-color: black;
	    	height: 40px;
	    	width: 980px;
	    	margin-left: 10px;
	    }

	    .header_text
	    {
	    	color: white;
	    	font-size: 25px;
	    	margin-left: 320px;
	    }

	    .form
	    {
	    	margin-left: 300px;
	    }

	    input[type=text]
	    {
	    	height: 30px;
	    	width: 300px;
	        color: green;
	        font-weight: bold;
	    }

	    input[type=radio]
	    {
	    	height: 20px;
	    	width: 20px;
	    	color: green;
	    }

	    input[type=date]
	    {
	    	height: 30px;
	    	width: 300px;
	    	color: green;
	    	font-weight: bold;
	    }

	    textarea
	    {
	    	width: 300px;
	    	color: green;
	    	font-weight: bold;
	    }
       
       input[type=submit]
       {
       	 height: 35px;
       	 width: 120px;
       	 font-size: 15px;
       	 cursor: pointer;
       	 background-color: green;
       	 color: white;
       	 font-weight: bold;
       }

        input[type=reset]
       {
       	 height: 35px;
       	 width: 120px;
       	 font-size: 15px;
       	 cursor: pointer;
       	 background-color: green;
       	 color: white;
       	 font-weight: bold;
       }

       b
       {
       	 font-size: 20px;
       	 font-weight: bold;
       	 color: blue;
       }
        input[type=checkbox]
	    {
	    	height: 20px;
	    	width: 20px;
	    	color: green;
	    					

	</style>


</head>

<body bgcolor="lightyellow">

                                           <!-- Header Section -->

	<div class="header_left">

		<a href="index.php"><img src="headet.png" class="header_img"></a> 

		      <a href="change_pass.php" class="header_right"><img src="sett.png" ></a>

		<a href="logout.php"><img src="logout.png"></a>
	</div>

                                            <!-- Menu and Body Section -->


    <div class="body">
    	<div class="menu">

 
    		      <b class="header_text">  *****Admission Form*****</b>
    	  
    		
    	</div>  <br><br>

    	                                    <!-- Body work -->

            <div class="form">

            	<form name="frm" action="" method="post">

            <b>Name :</b> <br>
            <input type="text" name="nm" value="" placeholder="Enter Candidate Name">

            <br><br>

            <b>Fathers Name :</b> <br>
            <input type="text" name="fname" value="" placeholder="Enter Candidate Fathers Name">

            <br><br>

            <b>Mother Name :</b> <br>
            <input type="text" name="mname" value="" placeholder="Enter Candidate Mother Name">

            <br><br>

            <b>Gender :</b> <br>
            <input type="radio" name="gender" value="Male"><b style="color: green; font-size: 18px;"> Male</b>  
            <input type="radio" name="gender" value="female"><b style="color: green; font-size: 18px;">Female</b>
       
             <br><br>
              
             <b>Subject:</b>
             <br>

             <table border="2">
             <tr>	
             <th>Bengali:</th>
             <th>English:</th>
             <th>Math:</th>
             <th>Geo</th>
             <th>Lifes:</th>
             <th>Physics:</th>
             <th>Total No:</th>
         	 </tr>
         	 <tr>
             <td><input type="text" name="bengali" value="" style="width: 50px; text-align: center" ></td>
             <td><input type="text" name="english" value="" style="width: 50px; text-align: center"></td>
             <td><input type="text" name="math" value="" style="width: 50px; text-align: center"></td>
             <td><input type="text" name="geo" value="" style="width: 50px; text-align: center"></td>
             <td><input type="text" name="life" value="" style="width: 50px; text-align: center"></td>
             <td><input type="text" name="physics" value="" style="width: 50px; text-align: center"></td>
             <td><input type="text" name="tot" value="" style="width: 70px; text-align: center"></td>
             
             
             </tr>
             </table>

           <b>E-mail:</b> <br>
            <input type="text" name="email" value="" placeholder="Enter Candidate Mother Name">

            

            <br><br>

            <b>Date of Birth :</b> <br>
            <input type="date" name="dob" value="">

            <br><br>

            <b>Address :</b> <br>
            <textarea name="address" placeholder="Enter Candidates Address" rows="5" cols="20"></textarea>

            <br><br>

            <input type="submit" name="submit" value="Register"> <input type="reset" name="reset" value="Reset">

              </form>
         </div>


 				        

    </div>


    


</body>
</html>