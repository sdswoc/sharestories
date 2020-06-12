<?php
$username=test_input($_REQUEST['username']);
$password=$_REQUEST['password'];
$password2=$_REQUEST['password_again'];
$email=test_input($_REQUEST['email']);
$x=mysqli_connect("localhost","root","","usershare");
$query=mysqli_query($x,"SELECT username from profile2 where username='$username'");
if($rs=mysqli_fetch_array($query))
{
	header('Location: register2.php');
}
else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  header('Location: register3.php'); 
}
else{
if($password==$password2)	
{
	mysqli_query($x,"INSERT INTO `profile2` VALUES (NULL, '$username','$email','$password','')");
	mysqli_query($x,"INSERT INTO `activestatus` VALUES ('$username', 'n')");
	header('Location: login5.php');
} 
else
{
 header('Location: register4.php');
}}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>