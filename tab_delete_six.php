<?php
include "connection.php";
$id=$_GET['id'];
$qer=mysqli_query($conn,"delete from class_six where id=$id");

if($qer)
{
	echo "<script>alert('Delete Successfull..'); window.location.href='tab_five.php';</script>";
}


?>