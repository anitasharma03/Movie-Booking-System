<?php
		   if(isset($_POST['login']))
		   {
			   
		   $email=$_POST['username'];
		   $pass=$_POST['password'];
		   include("connection.php");
		   
		   $str=mysqli_query($conn,"select * from register where email='$email'
		   and password='$pass'");
		   
		   $res=mysqli_fetch_array($str);
		   $num=mysqli_num_rows($str); 
		   if($num==1)
		   {
		   session_start();
		   $_SESSION['id']=$res['id'];		   
		   $_SESSION['email']=$res['email'];
		   $_SESSION['name']=$res['name'];
		   $_SESSION['username']=$res['username'];
		   
		   header("location:profile.php");
		   }
		   else
		   {
			echo '<script language="javascript">';
			echo 'alert("Invalid Email and Password")';
			echo '</script>';
		   }
		   
		   }
?>
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
                            <label for="username">Username</label>                
                            <input type="text" name="username" placeholder="">
                        </ul>
                        <ul>
                            <label for="password">Password</label>                
                            <input type="password" name="password" placeholder="">
                        </ul>
                        <input type="submit" value="Login" name="login">
                    </form>    
                </div>
                <div class="contactformad">
                    <img src="../img/movie_student.jpg" alt="">
                </div>
            </div>
        </div>
    

    </div>
    
</body>
</html>