
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
          margin-left: 350px;
	    }
                       
                       /*Body Section*/

	    .body
	    {
	    	width: 1000px;
	    	height: 500px;
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
	    	margin-left: 350px;
	    }

	    .form
	    {
	    	margin-left: 100px;
	    }

       /*---Button Style Section--*/

      .button {
  padding: 25px 70px;
  font-size: 24px;
  text-align: center;
  cursor: pointer;
  outline: none;
  color: #fff;
  background-color: #4CAF50;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
  margin-left: 80px;
}

.button:hover {background-color: #3e8e41}

.button:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}

	    

	</style>


</head>

<body bgcolor="lightyellow">

                                           <!-- Header Section -->

	<div class="header_left">

		<a href="index.php"><img src="headeta.png" class="header_img"></a> 

		      <a href="change_pass.php" class="header_right"><img src="sett.png" ></a>

		<a href="logouts.php"><img src="logout.png"></a>
	</div>

                                            <!-- Menu and Body Section -->


    <div class="body">
    	<div class="menu">

 
    		      <b class="header_text">  *****Library Section*****</b>
    	  
    		
    	</div>  <br><br>

    	                                    <!-- Body work -->
            <div class="form">

             
               <br><br><br>
               <button  class="button" onclick="window.location.href='library.php'">Register Now</button>

               <button  class="button" onclick="window.location.href='student_show.php'">Student List</button>


              
  </div>
</div>

</div>
 				        
</div>

</body>
</html>
<?php
  }
  else
  {
    header("location:library_login.php?msg=You must login to enter!");
  }
?>


