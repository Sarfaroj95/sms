
<!DOCTYPE html>
<html>
<head>
	<title>Notice</title>
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
				margin-top: -100px;
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
		.insert
		{
			margin-left: 600px;
			margin-top: -30px;
			
		}
		.ins
		{
			cursor: pointer;
			width: 150px;
			height: 25px;
			color: green;
			background-color: #00ea00;
			font-size: 16px;
		}
		.hd

		{
			height: 30px;
			width: 700px;
			background: #0000e8;
			margin-left: 330px;
			color: white;
			font-size: 20px;
			text-align: center;

		}
		
		.back
		{
			/*background-image: url("solid.jpg");*/
		/*	background-color: #5e5eff;*/
		}
		#customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

#customers td, #customers th {
    border: 1px solid #ddd;
    padding: 8px;

}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
    padding-top: 8px;
    padding-bottom: 8px;
    text-align: center;
    background-color: #6a006a;
    color: white;
    width: 20px;

}
.fm
{
	width: 700px;
	margin-left: 330px;
}
.tdh
{
	text-align: center;
}
.tdb
{
   text-align: center;
   height: 25px;
         width: 60px;
         font-size: 14px;
         cursor: pointer;
         background-color: green;
         color: white;
         margin-right:  10px;
   


}
.tdd
{
   text-align: center;
   height: 25px;
         width: 60px;
         font-size: 14px;
         cursor: pointer;
         background-color: red;
         color: white;
         

  

}
.date
{
   text-align: center;
   height: 50px;
         width: 80px;
         font-size: 14px;
        

  

}

.contain
{
   
   height: 50px;
         width: 350px;
         font-size: 14px;
        

  

}
		


		

	
	</style>
</head>
<body class="back">


	<div class="header">

	<div class="header_logo"><a href="admin_profile.php"> <img src="slicon.png" style="width: 50px; height: 50px; margin-top:110px;"></a></div>


	<div class="header_beack"> <a href="logout_add.php"><img src="logouts.png" style="margin-left: 550px; margin-top: 20px;"></a></div>
	</div>

	<div class="header_name">School Management System</div>

	<div class="admin"> ---Admin Section---</div>

	<div class="hd">Notice</div>
	
	 
	
	

					    <!-- Form Section -->
<div class="fm">
<table id="customers">
  <tr>
  	<th>Sl.No.</th>
    <th>Title</th>
    <th>Date</th>
    <th>Contain</th>
     <th>Update Notice</th>
   
  </tr>
  <?php
  
include "connection.php";

$qer=mysqli_query($conn,"select * from notice ");


$c='1';

while($res=mysqli_fetch_assoc($qer))
	
{
?>
<tr>
	<td class="tdh" style="width: 10px;"><?php echo $c++;?></td>
	 <td class="tdh"><?php echo $res['title'];  ?></td>
	  <td class="date"><?php echo $res['dat'];  ?></td>
	   <td class="contain"><?php echo $res['contain'];  ?></td>
	   
	    
	    <td style="text-align: center; width: 100px;">
	    	<a href="notice_update.php?id=<?php echo $res['id']; ?>">
	    	<input type="button" name="" value="Update" class="tdb"></a></td>
     

    
	

</tr>
   <?php } ?>
</table>
</div>



					    
             
         
         <div class="admin"></div>
         <div class="insert"> <a href="notice_admin.php"><input class="ins" type="button" name="" value="Insert"></a> </div>
</div>			

</div>
</body>
</div>
</html>

