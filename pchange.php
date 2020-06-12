<?php
session_start();
$x=mysqli_connect('localhost','root','','usershare');
$user=$_SESSION['username'];
$curr_password=$_REQUEST['currentpassword'];
$newpassword=$_REQUEST['newpassword'];
$confirmpassword=$_REQUEST['confirmpassword'];
$password=mysqli_query($x,"SELECT password FROM profile2 where username='$user'");
if($rs=mysqli_fetch_array($password))
{
if($rs[0]==$curr_password)
{
		if($newpassword==$confirmpassword)
		{	 $query="UPDATE profile2 SET password='$newpassword' where username='$user'";
				if($upl=$x->query($query)){
		echo "<br/>Password updated";
		header("Location:main.php");}}
		else
{header("Location:changepassword2.php");}}
else
{header("Location:changepassword3.php");
}

					
}

?>