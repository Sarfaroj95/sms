
<?php

        session_start();
		include "connection.php";
		if(isset($_POST['submit']))
		{
			$a=$_POST['email'];
			$b=$_POST['password'];
		
			$qer=mysqli_query($conn,"select * from t_reg where mail='$a' and pass='$b'");
			if(mysqli_num_rows($qer)==1)
			{
				$log=mysqli_fetch_assoc($qer);
				$_SESSION['sid']=$log['id'];
				 echo "<script>alert('success login'); window.location.href='teachers_profile.php';</script>";
			}
			else
			{
				 echo "<script>alert('unsuccess login'); window.location.href='t_login.php';</script>";
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
	    	margin-left: 370px;
	    }

	    .form
	    {
	    	margin-left: 320px;

	    }

	    input[type=text]
	    {
	    	height: 30px;
	    	width: 300px;
	        font-weight: bold;
	        margin-left:50px;
	        border-radius: 5px;
	        margin-top: 30px;

	    }

	     input[type=password]
	    {
	    	height: 30px;
	    	width: 300px;
	        font-weight: bold;
	        margin-left:50px;
	         border-radius: 5px;
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
       	 margin-left:150px;
       	
       }

       

       b
       {
       	 font-size: 20px;
       	 font-weight: bold;
       	 color: blue;
       	 margin-left:30px;
       }

       .under_form
       {
       	 border : 2px solid black;
       	 border-radius: 8px;

       	 height: 280px;

       	 width: 400px;
       	 background-color: #00e874;

       }
       #fm
       {
       	color: gray;
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

 
    		      <b class="header_text">  *****Login Panel*****</b>
    	  
    		
    	</div>  <br><br>

    	                                    <!-- Body work -->
            <div class="form">

                 <div class="under_form">
                 	<div style="color: #b0ff62; font-weight: bold; font-size: 25px; text-align: center; border: inset; background-color: #008c23; padding-top: 10px; height:  40px;" > Teachers Login</div>

                     

                     <form name="frm" action="" method="post" id="fm">

                      
                 	 <input type="text" name="email" value="" placeholder="Please Enter Your Email"></a>

                 	 <br><br>

                 	 
                 	 <input type="password" name="password" value="" placeholder="Please Enter Your Password"></a>


                 	 <br><br>

                 	 <input type="submit" name="submit" value="Login"></a>

                 	 	</form>


                 </div>

           
         </div>
 				        

    </div>


    


</body>
</html>