<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style>

</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
	<form method="post" action="index.php">
    	<table width="600" border="3" align="center">
        	<tr>
            	<th bgcolor="yellow" colspan="3">Student Registration Form</th>
            </tr>
            <tr>
            	<td align="right">Student Name</td>
                <td><input type="text" name="name">
                <font color="red"><?php echo @$_GET['naame']; ?></font>
                </td>
            </tr>
            <tr>
            	<td align="right">Father Name</td>
                <td><input type="text" name="father">
                 <font color="red"><?php echo @$_GET['faather']; ?></font>
                 </td>
            </tr>
            <tr>
            	<td align="right">School Name</td>
                <td><input type="text" name="school">
                 <font color="red"><?php echo @$_GET['schoool']; ?></font>
                 </td>
            </tr>
            <tr>
            	<td align="right">Roll No</td>
                <td><input type="text" name="roll">
                 <font color="red"><?php echo @$_GET['rooll']; ?></font>
                 </td>
            </tr>
            <tr>
            	<td align="right">Class</td>
                <td>
                <select name="class">
                <option>Select Class</option>
                <option>10th</option>
                <option>9th</option>
                </select>
                 <font color="red"><?php echo @$_GET['claass']; ?></font>
                </td>
            </tr>
            <tr>
            	<td align="center" colspan="6">
                <input type="submit" name="submit" value="Submit">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
<?php
error_reporting(0);
$con=mysql_connect("localhost","root","");
$db=mysql_select_db("student",$con);
if(isset($_POST['submit']))
{
 $name=$_POST['name'];
 $father=$_POST['father'];
 $school=$_POST['school'];
 $roll=$_POST['roll'];
 $class=$_POST['class'];
if($name=='')
	{
	echo "<script>window.open('index.php?naame=Name is Requireds','_self')</script>";
	exit();
}

if($father=='')
	{
	echo "<script>window.open('index.php?faather=Father Name is Requireds','_self')</script>";
	exit();
}
if($school=='')
	{
	echo "<script>window.open('index.php?schoool=School Name is Requireds','_self')</script>";
	exit();
}


if($roll=='')
	{
	echo "<script>window.open('index.php?rooll=Roll No is Requireds','_self')</script>";
	exit();
}

if($class=='')
	{
	echo "<script>window.open('index.php?claass=Class is Requireds','_self')</script>";
	exit();
}
$query= "insert into user values('','$name','$father','$school','$roll','$class')";
$run=mysql_query($query);
if($run)
{
	echo "<br>";
	echo "<center><b>Data Has Been Inserted into Database</b></center>";
	echo "<br>";
	echo "<table align='center' border='2' width='500'>
	
	<tr>
	<td>$name</td>
	<td>$father</td>
	<td>$school</td>
	<td>$roll</td>
	<td>$class</td>
	</tr>
	</table>";
	
}
}
?>