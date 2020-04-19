<?php
 session_start();

 include "connection.php";

 if ($_SESSION['sid'])) 
 {
 	$sid=$_SESSION['sid'];

 		$details_fetch=mysqli_query($conn,"select * from library_details");

 
 
 }


?>


<!DOCTYPE html>
<html>
<head>
	<title>Home-SMS</title>

   <link rel="stylesheet" type="text/css" href="">

	

</head>

<body bgcolor="lightyellow">

                                           <!-- Header Section -->

	<div class="header_left">

		<a href="index.php"><img src="headet.png" class="header_img"></a> 

		      <a href="change_pass.php" class="header_right"><img src="sett.png" ></a>

		<a href="logout.php"><img src="logout.png"></a>
	</div>

                                            <!-- Menu and Body Section -->


    <div class="body">
    	<div class="menu">

 
    		      <b class="header_text">  *****Student Details*****</b>
    	  
    		
    	</div>  <br><br>

    	                                    <!-- Body work -->
            <div class="form">

                

                     <form name="frm" action="update.php" method="post">
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
                        	<?php
                        	while($fetch=mysqli_fetch_assoc($details_fetch))
                        	{


                        	?>
                        	<tr>

                        		<td><input type="text" name="sname" value="<?php echo $fetch['sname']; ?>"></td>
                        		<td><input type="text" name="class" value="<?php echo $fetch['class']; ?>"></td>
                        		<td><input type="text" name="roll" value="<?php echo $fetch['roll']; ?>"></td>
                        		<td><input type="text" name="book" value="<?php echo $fetch['bookname']; ?>"></td>
                        		<td><input type="text" name="author" value="<?php echo $fetch['authorname']; ?>"></td>
                        		<td><input type="date" name="with" value="<?php echo $fetch['withdroldate']; ?>"</td>
                        		<td><input type="date" name="sub" value="<?php echo $fetch['submisiondate']; ?>"</td>

                        		<td><a href="update.php?>id=<?php echo $fetch['id']; ?>"><input type="button" name="update"value="Update"></a></td>
                        		<td><input type="submit" name="delete" value="delete"></td>
                        	</tr>
                        	<?php
                            }
   

                            ?>
                        </table>
                 	 	</form>
                 </div>
         </div>
    </div> 
</body>
</html> 