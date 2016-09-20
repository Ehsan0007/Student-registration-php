<?php 
error_reporting(0);
$con=mysql_connect("localhost","root","");
$db=mysql_select_db("student",$con);

$delete =$_GET['del'];
$query="delete from user where id='$delete'";
$exe=mysql_query($query);
if($exe)
{
	echo "<script>window.open('view.php?deleted=Record Has Been Deleted','_self')</script>";
}

?>