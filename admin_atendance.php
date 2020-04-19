
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
		/* Dropdown Button */
.dropbtn {
    background-color: #4CAF50;
    color: white;
    padding: 16px;
    font-size: 20px;
    width: 350px;
    border: none;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
    position: relative;
    display: inline-block;
    margin-left: 180px;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f1f1f1;
    min-width: 350px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
    text-align: center;

}

/* Links inside the dropdown */
.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;

}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #ddd}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
    display: block;
}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {
    background-color: #3e8e41;
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

		<br><br><br>


              <div class="dropdown">
 			  <button class="dropbtn"> Select Class For Attendance</button>
  			  <div class="dropdown-content">
    				
    				<a href="attendance.php">Class-V</a>
    				<a href="class_six.php">Class-VI</a>
    				<a href="class_seven.php">Class-VII</a>
    				<a href="class_eight.php">Class-VIII</a>
    				<a href="class_nine.php">Class-IX</a>
    				<a href="class_ten.php">Class-X</a>

  </div>
				    
             
         </div>
         
</div>	
<div class="admin"></div>			

</div>
		</body>
</div>
</html>

