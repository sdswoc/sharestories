<?php
session_start();
$username=$_REQUEST['username'];
$password=$_REQUEST['password'];
echo $username;
echo $password;
$x=mysqli_connect("localhost","root","","usershare");
if($x)
{
$z=mysqli_query($x,"SELECT 1 from `profile2` where username='$username' and password='$password'");
if($rs=mysqli_fetch_array($z))
{
$_SESSION['username']=$username;
header('Location: main.php');
}
else{
	header('Location: login4.php');
}
}

?>