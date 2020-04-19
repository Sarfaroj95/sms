<?php
include "connection.php";

$id=$_GET['id'];
$qer=mysqli_query($conn,"delete from report where id=$id");

if($qer)
{
	echo "<script>alert('Delete Successfull..'); window.location.href='admin_report_show.php';</script>";
}


?>