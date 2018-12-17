<?php
$username=$_REQUEST['username'];
$password=$_REQUEST['password'];
$password2=$_REQUEST['password_again'];
$email=$_REQUEST['email'];
$x=mysqli_connect("localhost","root","","usershare");
if($password==$password2)	
{
	mysqli_query($x,"INSERT INTO `profile2` VALUES (NULL, '$username','$email','$password','')");
	header('Location: login5.php');
} 
else
{echo "Your passwords don\'t match"; }
?>