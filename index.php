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

	    .marquee
	    {
	    	color: white;
	    	font-size: 25px;
	    	margin-top: 5px;
	    	cursor:pointer;
	    }

	    						/*Logo Section*/

	    .logo1
	    {
	    	margin-left: 300px;
	    }
	     .logo2
	    {
	    	margin-left: 60px;
	    }
	     .logo3
	    {
	    	margin-left: 60px;
	    }
	     .logo4
	    {
	    	margin-left: 60px;
	    }

	    .logo5
	    {
	    	margin-left: 300px;
	    }
	     .logo6
	    {
	    	margin-left: 60px;
	    }
	     .logo7
	    {
	    	margin-left: 60px;
	    }
	     .logo8
	    {
	    	margin-left: 60px;
	    }

	    .logo9
	    {
	    	margin-left: 300px;
	    }
	     .logo10
	    {
	    	margin-left: 60px;
	    }
	     .logo11
	    {
	    	margin-left: 60px;
	    }
	     .logo12
	    {
	    	margin-left: 60px;
	    }

	</style>


</head>

<body bgcolor="lightyellow">

                                           <!-- Header Section -->

	<div class="header_left">

		<a href="index.php"><img src="headeta.png" class="header_img"></a> 

		     
	</div>

                                            <!-- Menu and Body Section -->


    <div class="body">
    	<div class="menu">

    		<marquee direction="left" class="marquee" onmouseover="stop()" onmouseout="start()">
    		        ****** Welcome To School Management System *****
    	   </marquee>
    		
    	</div>  <br><br>

    	                                    <!-- Body work -->

    	            <a href="add_class.php" class="logo1"><img src="admision.png"></a>
    	            <a href="library_login.php" class="logo2"><img src="Library.png"></a>
    	            <a href="attendance_select.php" class="logo3"><img src="Atendance.png"></a>
    	            

    	            						<br><br>

    	            <a href="t_login.php" class="logo5"><img src="Teachers.png"></a>
    	            <a href="notice.php" class="logo6"><img src="not.png"></a>
    	            <a href="result_select.php" class="logo7"><img src="result.png"></a>
    	            

    	            				        <br><br>

    	           	 <a href="academic.php" class="logo9"><img src="Academics.png"></a>
    	           <a href="report.php" class="logo8"><img src="Report.png"></a>
    	            <a href="admin_login.php" class="logo12"><img src="Settings.png"></a>
 				        

    </div>


</body>
</html>