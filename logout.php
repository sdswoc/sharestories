<?php
session_start();
$username=$_SESSION['username'];
$x=mysqli_connect('localhost','root','','usershare');
mysqli_query($x," UPDATE activestatus set active='n' where username='$username'");
$_SESSION['username']="";
header('Location: home.php');
?>