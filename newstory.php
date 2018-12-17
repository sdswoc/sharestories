<?php
session_start();
$dbname="usershare"; 
$db=new mysqli('localhost','root','',$dbname);
$user=$_SESSION["username"];
$story=$_REQUEST['t'];
$title=$_REQUEST['n'];
if($db)
{
	mysqli_query($db,"INSERT INTO story VALUES (NULL, '$user','$story',now(),'$title')");
	
}
?>