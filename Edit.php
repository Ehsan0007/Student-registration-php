<?php
error_reporting(0);
$con=mysql_connect("localhost","root","");
$db=mysql_select_db("student",$con);
$edit_record=$_GET['edit'];
$query="select * from user where id='$edit_record'";
$run=mysql_query($query);
while($data=mysql_fetch_array($run))
{
	$user_id=$data[0];
	$user_name=$data[1];
	$user_father=$data[2];
	$user_school=$data[3];
	$user_roll=$data[4];
	$user_class=$data[5];
}


?>

<html>
	<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
	<form method="post" action="Edit.php?edit_form=<?php echo $user_id; ?>">
    	<table width="600" border="3" align="center">
        	<tr>
            	<th bgcolor="yellow" colspan="3">Update  Form</th>
            </tr>
            <tr>
            	<td align="right">Student Name</td>
                <td><input type="text" name="name1" value="<?php echo $user_name; ?>">
                </td>
            </tr>
            <tr>
            	<td align="right">Father Name</td>
                <td><input type="text" name="father1" value="<?php echo $user_father; ?>">
                 </td>
            </tr>
            <tr>
            	<td align="right">School Name</td>
                <td><input type="text" name="school1" value="<?php echo $user_school; ?>">
                 </td>
            </tr>
            <tr>
            	<td align="right">Roll No</td>
                <td><input type="text" name="roll1" value="<?php echo $user_roll; ?>">
                 </td>
            </tr>
            <tr>
            	<td align="right">Class</td>
                <td>
                <select name="class1">
                <option value="<?php echo $user_class; ?>"><?php echo $user_class; ?></option>
                <option>10th</option>
                <option>9th</option>
                </select>
                </td>
            </tr>
            <tr>
            	<td align="center" colspan="6">
                <input type="submit" name="update" value="Update">
                </td>
            </tr>
        </table>
    </form>
</body>

</html>
<?php
if(isset($_POST['update']))
{
	$edit_reord1=$_GET['edit_form'];
	$s_name=$_POST['name1'];
	$s_father=$_POST['father1'];
	$s_school=$_POST['school1'];
	$s_roll=$_POST['roll1'];
	$s_class=$_POST['class1'];
	$query1="update user set Name='$s_name',Father_Name='$s_father',School_Name='$s_school',Roll_No='$s_roll',Class='$s_class' where id='$edit_reord1'";
	$ex1=mysql_query($query1);
if($ex1)
{
	echo "<script>window.open('view.php?updated=Record Has Been Updated','_self')</script>";
}
}
?>