<?php
include "connection.php";

$id=$_GET['id'];
$qer=mysqli_query($conn,"delete from class_seven where id=$id");

if($qer)
{
	echo "<script>alert('Delete Successfull..'); window.location.href='tab_seven.php';</script>";
}


?>