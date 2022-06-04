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
$str="select * from student";
$res=mysql_query($str);// nearly records
while($row=mysql_fetch_array($res))
{
echo $row['sname']." ".$row['rollno']." ".$row['branch']."<br>";	
}
?>