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
$nm=$_POST['t1'];
$rn=$_POST['t2'];
$br=$_POST['t3'];

$str="insert into student values('$nm','$rn','$br')";
if(mysql_query($str))
echo "recordinsert";
else
	echo mysql_error();
?>