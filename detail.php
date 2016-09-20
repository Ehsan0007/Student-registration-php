<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
	<table align="center" width="1000" border="4">
    	<tr>
        	<th colspan="20" bgcolor="yellow">Your Record</th>
        </tr>
        <tr>
        	<td>Serial No</td>
            <td>Name</td>
            <td>Father</td>
            <td>Roll NO</td>
        </tr>
        <tr>
<?php
error_reporting(0);
$con=mysql_connect("localhost","root","");
$db=mysql_select_db("student",$con);
$u_detail=$_GET['Detail'];
$query="select * from user where id='$u_detail'";
$exe=mysql_query($query);
while($data=mysql_fetch_array($exe))
{
	$serial=$data[0];
	$name=$data[1];
	$father=$data[2];
	$roll=$data[4];
?>
        	<td><?php echo $serial; ?></td>
            <td><?php echo $name; ?></td>
            <td><?php echo $father; ?></td>
            <td><?php echo $roll; ?></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>