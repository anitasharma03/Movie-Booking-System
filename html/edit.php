<?php
include("connection.php");
session_start();
if (isset($_SESSION['username']) && ($_SESSION['id']))
{
	if(isset($_GET['msg']))
{
	echo"<font color=red><b><h1>".$_GET['msg']."</h1></b></font>";
}
else
{
$sql=mysqli_query($conn,"select * from register where id=".$_SESSION['id']) or die(mysql_error());
while($info=mysqli_fetch_array($sql))
{//echo $info['firstname'];}
				
?>

<ul>
<li><a href="profile.php">About Me</a></li>
<li><a href="edit.php" name="edit">Edit</a></li>
<li><a href="changepassword.php">Change Password</a></li>
<li><a href="order.php">Order Now!</a></li>
<li><a href="logout.php">Logout</a></li>
</ul>	
<form action="" method="post">
<?php
/*if(isset($_GET['msg']))
{
	echo"<font color=red><b><h1>".$_GET['msg']."</h1></b></font>";
}
else
{
$data=mysqli_query($conn,"select * from register where id='".$_SESSION['id']."'") or die(mysql_error());
while($info=mysqli_fetch_array($data))*/
	//print_r($info);
echo "<table align=\"center\" border=\"0px\" width=\"200px\"><tr>";
?>
<tr>
<td><b>First Name:</b></td>
<td><input type="text" name='name'value="<?php echo $info['name']; ?>" /> </td>
</tr>

<tr>
<td><b>Last Name:</b></td>
<td><input type="text" name='username' value="<?php echo $info['username']; ?>" /> </td>
</tr>

<tr><td><b>Email:</b></td><td><input type="text" name='email' disabled="disabled" 
value="<?php echo $info['email']; ?>" /></td></tr>

<tr><td><b>Phone:</b></td><td><input type="text" name='mobile' maxlength="10" 
value="<?php echo $info['mobile']; ?> " /> </td></tr>

<tr><td><b>Address:</b></td><td><input type="text" name='address1' 
value="<?php echo $info['address1']; ?>" /></td></tr>

<tr><td><b>State:</b></td><td><input type="text" name='address2' 
value="<?php echo $info['address2']; ?>" /> </td></tr>

<tr><td><b>City:</b></td><td><input type="text" name='city' disabled="disabled"
value="<?php echo $info['city'] ?> " /> </td></tr>



<tr><td><input type="submit" align="center"value="UPDATE" /></td></tr>
</table>
</form>

<?php
}
if(isset ($_POST['name']) && isset ($_POST['username']) && 
isset ($_POST['email']) && isset($_POST['mobile']) && isset($_POST['address1'])
&& isset($_POST['address2'])&& isset($_POST['city']))
{
$name=$_POST['name'];
$username=$_POST['username'];
$mobile=$_POST['mobile'];
$address1=$_POST['address1'];
$address2=$_POST['address2'];
$email=$_POST['email'];
$city=$_POST['city'];

$result = mysqli_query($conn,"update register set name='$name',
username='$username',email='$email',address1='$address1',address2='$address2',
mobile='$mobile',city='$city',
where id='".$_SESSION['id']."'") or die(mysql_error());
							
if($result)
{
header("location: profile.php?msg=Record Updated");	
}
else
{
mysql_error();
}
}
}
}		
else
{
echo header('location:index1.php');
}

?>			
</body>
</html>	