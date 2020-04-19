<?php

 include "connection.php";

      $sid=$_GET['id'];
      

 		if (isset($_REQUEST['submit'])) 
 		{
 			$name=$_REQUEST['sname'];
 			$class=$_REQUEST['class'];
 			$roll=$_REQUEST['roll'];
 			$book=$_REQUEST['book'];
 			$author=$_REQUEST['author'];
 			$with=$_REQUEST['with'];
 			$sub=$_REQUEST['sub'];

 			$update=mysqli_query($conn,"update library_details set sname='$name', class='$class', roll='$roll', bookname='$book', authorname='$author', withdroldate='$with', submisiondate='$sub' where id='$sid'");

 			if($update) 
 			{
				 echo "<script>alert('update success'); window.location.href='student_details.php';</script>";
			}
			else
			{
  				echo "<script>alert('update unsuccess'); window.location.href='student_details.php';</script>";	
			}		
}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<div class="form">

                

                     <form name="frm" action="" method="post">


                        <table border="2">

                        	<tr>
                        		<th>STUDENT NAME</th>
                        		<th>CLASS</th>
                        		<th>ROLL NO</th>
                        		<th>BOOK</th>
                        		<th>AUTHOR</th>
                        		<th>WITHDRAW</th>
                        		<th>SUBMISSION</th>
                        		<th></th>
                        		<th></th>
                        	</tr>
                        	
                        	<tr>

                        		<td><input type="text" name="sname" value="<?php echo $fetch['sname'] ?>"></td>
                        		<td><input type="text" name="class" value="<?php echo $fetch['class'] ?>"></td>
                        		<td><input type="text" name="roll" value="<?php echo $fetch['roll']; ?>"></td>
                        		<td><input type="text" name="book" value="<?php echo $fetch['bookname']; ?>"></td>
                        		<td><input type="text" name="author" value="<?php echo $fetch['authorname']; ?>"></td>
                        		<td><input type="date" name="with" value="<?php echo $fetch['withdroldate']; ?>"</td>
                        		<td><input type="date" name="sub" value="<?php echo $fetch['submisiondate']; ?>"</td>

                        		<td><input type="submit" name="submit" value="update"></td>
                        	</tr>
                        	
   

                            ?>
                        </table>
                 	 	</form>
                 </div>
         </div>
    </div>

</body>
</html>
