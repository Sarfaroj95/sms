<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php

include "connection.php";

$qer=mysqli_query($conn,"select * from class_five");
$res=mysqli_fetch_assoc($qer);
$class='V';
$present='1';
$absent='0';
?>

<form method="post">
<table border="2">
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
	<td><input type="submit" name="sub"></td>
</tr>
</table>
</form>

<?php
include "connection.php";

if(isset($_POST['sub']))
{
	
		$nam=$_POST['nam'];
		$fnam=$_POST['fnam'];


	$qer=mysqli_query($conn,"insert into attent_five values('$nam','$fnam')");  
	if($qer)
	{
		echo "Successful Update";
	}
	else
	{
		echo "Unsuccessful Update";
	}
}
?>

</body>
</html>