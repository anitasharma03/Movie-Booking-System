<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../css/style.css">
    <title>Movie booking</title>
</head>
<body>
    <div class="main">
        <div class="header">
            <h1>MOVIE TICKET BOOKING SYSTEM</h1>            
            <div class="navbar"> 
                <ul><a href="../html/index.html">Home</a></ul>
                <ul><a href="../html/about.html">About</a></ul>
                <ul><a href="../html/allmovies.html">All Movies</a></ul>
                <ul><a href="../html/register.html">Register</a></ul>
                <ul><a href="../html/login.html">Login</a></ul>
                <ul><a href="../html/contactus.html">Contact Us</a></ul>
            </div>
        </div>
        <div class="bodycontent">
            <div class="content">
                <div class="movieform">
                    <form action="" method="post">
                        <ul>
                            <label for="name">Name</label>                
                            <input type="text" name="name" placeholder="your name...">
                        </ul>
                        <ul>
                            <label for="username">Username</label>                
                            <input type="text" name="username" placeholder="username...">
                        </ul>
                        <ul>
                            <label for="password">Password</label>                
                            <input type="password" name="password" placeholder="your password...">
                        </ul>
                        <ul>
                            <label for="confirm_password">confirm Password</label>                
                            <input type="password" name="confirm_password" placeholder="confirm password...">
                        </ul>
                        <ul>
                            <label for="mobile">Mobile</label>
                            <input type="number" name="mobile" placeholder="your phone number...">
                        </ul>
                        <ul>
                            <label for="email">Email</label>
                            <input type="email" name="email" placeholder="your email..">
                        </ul>
                        <ul>
                            <label for="birthdate">Date of Birth</label>
                            <input type="date" name="birthdate" placeholder="">
                        </ul>
                        <ul>
                            <label for="address1">Address Line 1</label>
                            <input type="text" name="address1" placeholder="">
                        </ul>
                        <ul>
                            <label for="address2">Address Line 2</label>
                            <input type="text" name="address2" placeholder="">
                        </ul>
                        <ul>
                            <label for="city">City</label>
                            <input type="text" name="city" placeholder="name of your city...">
                        </ul>

                                            
                            
                            
                            
                        <input type="submit" value="Register" name="submit">
                    </form>    
                </div>
            </div>
        </div>        


    </div>
    
</body>
</html>
<?php
	if(isset($_POST['submit']))
		   {

$name=$_POST['name'];
$username=$_POST['username'];
$password=$_POST['password'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
//$birthdate=$_POST['birthdate'];
$address1=$_POST['address1'];
$address2=$_POST['address2'];
$city=$_POST['city'];

include("connection.php");

$sql="insert into register (name,username,email,password,mobile,address1,
address2,city)
values('$name','$username','$email','$password','$mobile','$address1',
'$address2','$city')";
if(mysqli_query($conn,$sql))
{
	echo "Record Inserted";
}
else
{
echo "Record Not Inserted". $sql . "<br>" . mysqli_error($conn);
}
}
?>