<?php
include "connection.php";

$id=$_GET['id'];
if(isset($_POST['submit']))

		{
			$snam=$_POST['sname'];
			$cls=$_POST['class'];
			$qer=mysqli_query($conn,"update library_details set sname='$snam','class='$cls' where id='$id'");
		
			if($qer)
		
	{
		echo "update success";
	}
	else
	{
		echo "update not success";
	}
}
?>
<html>
<body>
<form method="post" action="student_show.php.php">

name <input type="text" name="sname" placeholder="enter name" value="<?php echo $fetch['sname']?>" ><br/>
class <input type="text" name="class" value="<?php echo $fetch['class']?>" /><br/>
<input type="submit" name="submit" value="update" ><br/>
</form>
<body>
</html>