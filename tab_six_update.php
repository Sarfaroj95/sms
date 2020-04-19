



<!DOCTYPE html>
<html>
<head>
	<title>Update</title>
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
		t
       {
        color: #350035;
        font-size: 18px;
        font-weight: bold;
       }
       .mm
      {
        font-size: 16px;
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
         margin-top: 10px;
         margin-left:230px;
         border-radius: 9px;
        
       }
       .body
       {
       	background-color: #008080;
       	width: 800px;
       	margin-left: 270px;
       }



	</style>
</head>
<body class="back">
<?php
include "connection.php";

$id=$_GET['id'];
$qer=mysqli_query($conn,"select * from class_six where id='$id'");
$res=mysqli_fetch_assoc($qer);

?>



	<div class="header">

	<div class="header_logo"><a href="tab_six.php"> <img src="slicon.png" style="width: 50px; height: 50px; margin-top: 10px;"></a></div>


	<div class="header_beack"> <a href="logout_add.php"><img src="logouts.png" style="margin-left: 650px; margin-top: 25px;"></a></div>
	</div>

	<div class="header_name">School Management System</div>

	<div class="admin"> ---Admin Section---</div>

	<div class="form">

             
               <br><br><br>
               <div class="body">

<div style="width: 600px;height: 30px; background: #f24f00; text-align: center; font-size: 18px; color: white; padding-top: 10px;border-top-left-radius: 8px;
border-top-right-radius: 8px; margin-top: -55px; margin-left: 100px; "  >Update Class-VI</div>

  <div class="frm" style="background: #cb61ae; width: 600px; height: 470px;border-color: black; border-bottom-right-radius: 8px;
  border-bottom-left-radius: 8px; margin-left: 100px;">


	<form method="post">
		<table style="margin-left: 50px;">
	<tr>	
		<td><t>Name:</t></td><td> <input class="mm" type="text" name="nam" value="<?php echo $res['sname']; ?>"></td>
	</tr>

	<tr>
		<td><t>Sex:</t></td><td> <input class="mm"  type="text" name="s" value="<?php echo $res['gender']; ?>"></td>
	</tr>

	<tr>

		<td><t>Father Name:</t></td><td> <input class="mm"  type="text" name="fname" value="<?php echo $res['fname']; ?>"></td>
	</tr>

	<tr>
		<td><t>Mother Name:</t></td><td> <input class="mm"  type="text" name="mname" value="<?php echo $res['mname']; ?>"></td>
	</tr>

	<tr>
		<td><t>Address:</t></td><td> <input class="mm"  type="textarea" name="add" value="<?php echo $res['address']; ?>"></td>
	</tr>

	<tr>
		<td><t>Pin:</t></td><td> <input class="mm"  type="text" name="pin" value="<?php echo $res['pin']; ?>"></td>
	</tr>

	<tr>
		<td><t>Mail:</t></td><td> <input class="mm"  type="text" name="mail" value="<?php echo $res['mail']; ?>"></td>
	</tr>

	<tr>
		<td><t>Mobile:</t></td><td> <input class="mm"  type="text" name="mob" value="<?php echo $res['mobile']; ?>"></td>
	</tr>

	<tr>
		<td><t>Birthday:</t></td><td> <input class="mm"  type="date" name="dob" value="<?php echo $res['dob']; ?>"></td>
	</tr>

	<tr>
		<td><t>Age:</t></td><td> <input class="mm"  type="text" name="age" value="<?php echo $res['age']; ?>"></td>
	</tr>

	<tr>
		<td><t>Previous School Name:</t></td><td> <input  class="mm" type="text" name="school" value="<?php echo $res['school']; ?>"></td>
	</tr>

	<tr>
		<td><t>Mother Tounge:</t></td><td> <input class="mm"  type="text" name="tong" value="<?php echo $res['tong']; ?>"></td>
	</tr>

	<tr>
		<td><t>Religian:</t></td><td> <input class="mm"  type="text" name="rel" value="<?php echo $res['religian']; ?>"></td>
	</tr>

	<tr>
		<td><t>Income:</t></td><td> <input class="mm"  type="text" name="income" value="<?php echo $res['income']; ?>"></td>
	</tr>
	</table>



		<td><input type="submit" name="sub" value="update"></td>
	

		
	</form>


<?php
if(isset($_POST['sub']))
{
	$nam=$_POST['nam'];
	$s=$_POST['s'];
	$fnam=$_POST['fname'];
	$mnam=$_POST['fname'];
	$add=$_POST['add'];
	$pin=$_POST['pin'];
	$mail=$_POST['mail'];
	$mob=$_POST['mob'];
	$dob=$_POST['dob'];
	$age=$_POST['age'];
	$scl=$_POST['school'];
	$tong=$_POST['tong'];
	$rel=$_POST['rel'];
	$in=$_POST['income'];


	

	
	
	$qer=mysqli_query($conn,"update class_six set sname='$nam', gender='$s',
	fname='$fnam', mname='$mnam', address='$add', pin='$pin', mail='$mail',
	mobile='$mob', dob='$dob', age='$age', school='$scl', tong='$tong', religian='$rel', income='$in'
	 where id='$id'");

	if($qer)
	{
		echo "<script>alert('Update Successfull');
		window.location.href='tab_six.php';</script>";
	}
}



?>
</div>
</div>
</div>
</div><div class="admin"></div>
</div>
 
</body>
</html>

