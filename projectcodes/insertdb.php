<?php
$con=mysql_connect("localhost","root","");
if($con)
{
	
	echo"connected to server<br>";
}
else
{
	echo"Not connected to server<br>";
}
if(mysql_select_db("mydbsv",$con))
	echo "Connected to db";
else
	echo mysql_error();
if(isset($_POST['insert']))
{
$nm=$_POST['t1'];
$rn=$_POST['t2'];
$br=$_POST['t3'];

$str="insert into student values('$nm','$rn','$br')";
if(mysql_query($str))
echo "recordinsert";
else
	echo mysql_error();
}
?>
<html>
<head>
<title>Student Data</title></head>
<body>
<div>
<form action="" method="post">
<table>
<th>Student Details</th>
<tr>
<td>Enter Name</td>
<td><input type="text" name="t1"></td>
</tr>
<tr>
<td>Email</td>
<td><input type="text" name="t2"></td>
</tr>
<tr>
<td>telephone</td>
<td><input type="text" name="t3"></td>
</tr>
<tr>
<td>country</td>
<td><input type="text" name="t3"></td>
</tr>
<tr>
<td>subject</td>
<td><input type="text" name="t3"></td>
</tr>



<tr>
<td><input type="submit" name="insert" value="insert" /></td>
<td><input type="submit" name="update" value="update"></td>
<td><input type="submit" name="delete" value="delete"></td>
<td><input type="submit" name="display" value="display"></td>
</tr>
</table>
</form>
</div>
</body>
</html>








