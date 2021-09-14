<?php
session_start();
if(isset($_SESSION['id']))
{
	session_destroy();
	header("location:index1.php");
	
}
else
{
	header("location:index1.php");
}

?>