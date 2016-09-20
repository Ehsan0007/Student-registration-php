<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style>
td{text-align:center;}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
	<table align="center" width="1000" border="4">
    	<tr>
        	<td colspan="20" align="center" bgcolor="yellow"><h1>Display All Records</h1></td>
        </tr>
        <tr>
        	<th>Serial No</th>
            <th>Name </th>
            <th>Father Name</th>
            <th>Roll No</th>
            <th>Delete</th>
            <th>Edit</th>
            <th>Detail</th>
        </tr>
        
        <tr>
<?php 
error_reporting(0);
$con=mysql_connect("localhost","root","");
$db=mysql_select_db("student",$con);
$query="select * from user ";
$exe=mysql_query($query);
while($data=mysql_fetch_array($exe))
{
	$id=$data[0];
	$name=$data[1];
	$father=$data[2];
	$roll=$data[4];

 
 
?>
			<td><?php echo $id; ?></td>
        	<td><?php echo $name; ?></td>
            <td><?php echo $father; ?></td>
            <td><?php echo $roll; ?></td>
            <td><a href="delete.php?del=<?php echo $id; ?>">Delete</a></td>
            <td><a href="Edit.php?edit=<?php echo $id; ?>">Edit</a></td>
            <td><a href="detail.php?Detail=<?php echo $id; ?>">Detail</td>
            
        </tr>
          <?php }?>
    </table>
  
</body>
</html>