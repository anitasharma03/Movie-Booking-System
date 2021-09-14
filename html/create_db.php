<?php
include("connection.php");
//$conn=mysqli_connect("localhost","root","");
$sql_query="create database movie";
if(mysqli_query($conn,$sql_query))
{
	echo "Database Create";
}
else
{
echo "Database not created";
}
?>