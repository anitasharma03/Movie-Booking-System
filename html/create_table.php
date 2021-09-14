<?php
include("connection.php");
$sql="create table register (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(30) NOT NULL,
username VARCHAR(30) NOT NULL,
email VARCHAR(50),
password VARCHAR(30),
mobile int(10),
birthdate date,
address1 varchar(30),
address2 varchar(30),
city varchar(10)
)";
mysqli_query($conn,$sql);
if(!$sql)
{
 die(mysqli_error());
}
echo "Table created";
?>