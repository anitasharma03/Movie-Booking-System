<?php
$conn=mysqli_connect("localhost","root","","movie");
if(!$conn)
{
die(mysqli_error());
}
else
{
echo "connected";
}
?>