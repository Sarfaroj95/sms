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
          margin-left: 400px;
	    }
                       
                       /*Body Section*/

	    .body
	    {
	    	width: 1000px;
	    	height: 550px;
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
	    	margin-left: 260px;

        border: 2px solid black;
        width: 450px;
        height: 130px;
        padding-top: 10px;
        margin-top: -20px;
	    }

	    input[type=text]
	    {
	    	height: 30px;
	    	width: 300px;
	        color: green;
	        font-weight: bold;
	        margin-left:30px;
	    }

	     input[type=password]
	    {
	    	height: 30px;
	    	width: 300px;
	        color: green;
	        font-weight: bold;
	        margin-left:30px;
	    }


	    input[type=radio]
	    {
	    	height: 20px;
	    	width: 20px;
	    	color: green;
	    }

	   /* input[type=date]
	    {
	    	height: 30px;
	    	width: 300px;
	    	color: green;
	    	font-weight: bold;
	    }*/

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
       	 margin-left:200px;
       	
       }

       /* input[type=reset]
       {
       	 height: 35px;
       	 width: 120px;
       	 font-size: 15px;
       	 cursor: pointer;
       	 background-color: green;
       	 color: white;
       	 font-weight: bold;
       }*/

       b
       {
       	 font-size: 20px;
       	 font-weight: bold;
       	 color: blue;
       	 margin-left:30px;
       }

      /* .form
       {
       	 border : 2px solid black;

       	 height: 300px;


       	 width:300px;
       	 background-color: yellow;
       	 margin-right: 50px;
       	 margin-right: 200px;

       }
	    					
*/

     
     /* Dropdown Button */
.dropbtn {
    background-color: #4646ff;
    color: white;
    padding: 16px;
    font-size: 20px;
    width: 300px;
    border: none;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
    position: relative;
    display: inline-block;
    margin-left: 340px;
    margin-top: 20px;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f1f1f1;
    min-width: 300px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;

}

/* Links inside the dropdown */
.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;

}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #b0b0ff}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
    display: block;
}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {
    background-color: #0000e1;
    cursor: pointer;
}


	</style>


</head>

<body bgcolor="lightyellow">

                                           <!-- Header Section -->

	<div class="header_left">

		<a href="t_login.php"><img src="headeta.png" class="header_img"></a> 

		      <a href="change_pass.php" class="header_right"><img src="sett.png" ></a>

		<a href="logout.php"><img src="logout.png"></a>
	</div>

                                            <!-- Menu and Body Section -->


    <div class="body">
    	<div class="menu">

 
    		      <b class="header_text">  *****Teachers Profile*****</b>
    	  
    		
    	</div>  <br><br>

    	                                    <!-- Body work -->


            <?php

             $sid=$_SESSION['sid'];
            $con=mysqli_connect("localhost","root","","student");
            $qer=mysqli_query($con,"select * from t_reg where id='$sid' "); 
            $res=mysqli_fetch_assoc($qer);



             ?>
            <div class="form">

               <b>Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</b>    <b><?php echo $res['name'] ?></b>
               <br>

               <b>Department :</b> <b><?php echo $res['tdeperment'] ?></b>

               <br>

               <b>Subject&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :</b> <b><?php echo $res['tsubject'] ?></b>

               <br>

               <b>E-mail&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :</b> <b><?php echo $res['mail'] ?></b>

               <br>

               <b>Address&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :</b> <b><?php echo $res['address'] ?></b>

               <br><br><br>
             </div>


              <div class="dropdown">
 			  <button class="dropbtn"> Select Class</button>
  			  <div class="dropdown-content">
    				
    				<a href="result_class_five.php">Class-V</a>
    				<a href="result_class_six.php">Class-VI</a>
    				<a href="result_class_seven.php">Class-VII</a>
    				<a href="result_class_eight.php">Class-VIII</a>
    				<a href="result_class_nine.php">Class-IX</a>
    				<a href="result_class_ten.php">Class-X</a>

  </div>
</div>



              <!--  Subject:
               <select>	  <option>Select</option>
                          <option value="Begali">Begali</option>
                          <option value="English">English</option>
                          <option value="Mathemetics">Mathemetics</option>
                          <option value="Geography">Geography</option>
                          <option value="Life Science">Life Science</option>
                          <option value="Physical">Physical Science</option>
                          <option value="History">History</option>
                                                               	
               </select> -->





           
         </div>
 				        

    </div>


    


</body>
</html>

<?php
  }
  else
  {
    header("location:t_login.php?msg=You must login to enter!");
  }
?>