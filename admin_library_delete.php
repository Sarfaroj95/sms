<?php
$a=$_GET['id'];
include "connection.php";
$qer=mysqli_query($conn,"DELETE FROM  library_details WHERE id=$a");
  
  
if($qer);
 // Sql query for delete data
 
//header("Location:show.php?msg=Deletesuccess");
 echo "<script>alert('success'); window.location.href='admin_library_show.php';</script>";
?>