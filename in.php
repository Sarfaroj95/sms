<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


	<form method="post">
		<table border="2">
			<tr>
			<th>id</th>
			<th>name</th>
			<th>add</th>
			<th>Submit</th>
		</tr>
		<?php
				include "connection.php";

				$qer=mysqli_query($conn,"select * from class_five");
				while($res=mysqli_fetch_assoc($qer))
				{

		?>
		<tr>
			<td><input type="text" name="id" value="<?php echo $res['id']; ?>"></td>
			<td><input type="text" name="nm" value="<?php echo $res['sname']; ?>"></td>
			<td><input type="text" name="ad" value="<?php echo $res['address']; ?>"></td>
			<td><input type="submit" name="sub"></td>
		</tr>
		<?php } ?>
		</table>
	</form>

		
	

</body>
</html>
<?php
			$con=mysqli_connect("localhost","root","","emp");
			if(isset($_POST['sub']))
			{
				$id=$_POST['id'];
				$nam=$_POST['nm'];
				$ad=$_POST['ad'];
				$qer=mysqli_query($con,"insert into `tab1` values('$id','$nam','$ad') ");
				if($qer)
				{
					echo "<script> alert('Success') </script>";
				}
				else
				{
					echo "<script> alert('unsccess') </script>";
				}
			}

	?>