<!DOCTYPE html>
<html>
<head>
	<title>Attendance</title>
</head>
<body>

<from method='post'>

<table border="2">
		<tr>
		<th>Roll.No</th>
		<th>Name</th>
		<th>C/O</th>
		<th>Class</th>
		<th>Date</th>
		<th>Attendance</th>
		<th>Submit</th>
		<th>Show</th>
	</tr>

	<?php
			
			include "connection.php";

			$qer=mysqli_query($conn,"select * from class_five");

		


			$class='V';
			$present='1';
			$absent='0';
			$dat='date';

			while($res=mysqli_fetch_assoc($qer))
		{
	?>

	
<tr>
	<td><input type="text" name="id" value="<?php echo $res['id']; ?>"></td>
	<td><input type="text" name="nam" value="<?php echo $res['sname']; ?>"></td>
	<td><input type="text" name="fnam" value="<?php echo $res['fname']; ?>"></td>
	<td><input type="text" name="cls" value="<?php echo $class; ?>"></td>
	<td><input type="date" name="dat" value="<?php echo $dat;  ?>"></td>
	<td><input type="radio" name="atn" value="<?php echo $present ?>">Present
		<br>
		<input type="radio" name="atn" value="<?php echo $present ?>">Absent
	</td>
	<td><input type="submit" name="sub" value="Submit"></td>
	</tr>

</tr>

<?php  
}
?>
</table>
</form>


<?php
include "connection.php";

if(isset($POST['sub']))
{
	$id=$_POST['id'];
	$nam=$_POST['nam'];
	

	$qer=mysqli_query($conn,"insert into attent_five values('$id','$nam')");
	if($qer)
	{
		echo "<script>alert('Attendance successfull')</script>";
	}
	else
	{
		echo "<script>alert('Attendance failed')</script>";
	}

}

?>


</body>
</html>