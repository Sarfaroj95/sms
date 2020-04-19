<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table border="2" align="center">
 <tr> <th colspan="9">My Database Details</th></tr>
 <tr>
 <th>Id</th>
 <th>Name</th>
 <th>Class</th>
 <th>Roll</th>
 <th>Class</th>
 <th>BookName</th>
 <th>Book Issue</th>
 <th>Book Sub</th>
 
 <th>Edit ||Delete</th>
 </tr>
<?php
include "connection.php";
$qer=mysqli_query($conn,"select * from library_details ");



while($res=mysqli_fetch_assoc($qer))
{
?>
<tr>
	<td><?php echo $res['id'];  ?></td>
	<td><?php echo $res['sname'];  ?></td>
	<td><?php echo $res['class'];  ?></td>
	<td><?php echo $res['roll'];  ?></td>
	<td><?php echo $res['bookname'];  ?></td>
	<td><?php echo $res['authorname'];  ?></td>
	<td><?php echo $res['withdroldate'];  ?></td>
	<td><?php echo $res['submisiondate'];  ?></td>
	
	<td><a href="up.php?id=<?php echo $res['id']; ?>">update</a> ||
	    </td>
</tr>

<?php } ?>

</table>
</body>
</html>


