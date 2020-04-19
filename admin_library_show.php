
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
			width: 800px;
			background-color: green;
			margin-left: 270px;
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
			width: 800px;
			background: black;
			margin-left: 270px;
			color: white;
			font-size: 20px;
			text-align: center;

		}
		.hd

		{
			height: 30px;
			width: 800px;
			background: #0000e8;
			margin-left: 270px;
			color: white;
			font-size: 20px;
			text-align: center;

		}
		
		.back
		{
			/*background-image: url("solid.jpg");*/
			/*background-color: #5e5eff;*/
			background-color: #5e5eff;
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
	width: 800px;
	margin-left: 270px;
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
		


		

	
	</style>
</head>
<body class="back">


	<div class="header">

	<div class="header_logo"><a href="admin_library.php"> <img src="slicon.png" style="width: 50px; height: 50px; margin-top: 10px;"></a></div>


	<div class="header_beack"> <a href="logout_add.php"><img src="logouts.png" style="margin-left: 650px; margin-top: 25px;"></a></div>
	</div>

	<div class="header_name">School Management System</div>

	<div class="admin"> ---Admin Section---</div>
	<div class="hd">Library Details</div>
	 
	
	

					    <!-- Form Section -->
<div class="fm">
<table id="customers">
  <tr>
  	<th>Sl.No.</th>
    <th>Name</th>
    <th>Class</th>
    <th>Roll</th>
    <th>Books</th>
    <th>Authors</th>
    <th>Withdrol</th>
    <th>Submit</th>
    <th>Edit</th>
     <th>Delete</th>
  </tr>
  
<?php
include "connection.php";
$qer=mysqli_query($conn,"select * from library_details ");


$c='1';
while($res=mysqli_fetch_assoc($qer))
{
?>
<tr>
  <td><?php echo $c++;  ?></td>
  <td><?php echo $res['sname'];  ?></td>
  <td><?php echo $res['class'];  ?></td>
  <td><?php echo $res['roll'];  ?></td>
  <td><?php echo $res['bookname'];  ?></td>
  <td><?php echo $res['authorname'];  ?></td>
  <td><?php echo $res['withdroldate'];  ?></td>
  <td><?php echo $res['submisiondate'];  ?></td>
  
  <td><a href="admin_library_update.php?id=<?php echo $res['id']; ?>"><input type="button" name="" value="Update" / style="height: 35px;
         width: 80px;
         font-size: 15px;
         cursor: pointer;
         background-color: green;
         color: white;
         font-weight: bold;" ></a>
      </td>
      <td><input type="button" onclick="deleteme(<?php echo $res['id']; ?>)" name="delete" value="Delete" style="height: 35px;
         width: 80px;
         font-size: 15px;
         cursor: pointer;
         background-color: red;
         color: white;
         font-weight: bold;
         "></a></td>

         </tr>
         <script type="text/javascript">
           
            function deleteme(id)
            {
              if(confirm("Do you want delete "))
              {
                window.location.href='admin_library_delete.php?id=' +id+"";
                return true;
              }

            }

         </script>


</tr>

<?php } ?>

</table>
</div>



					    
             
         
         <div class="admin"></div>
</div>			

</div>
</body>
</div>
</html>

