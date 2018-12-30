<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: auto;
  text-align: center;
  font-family: arial;
  padding: 10px;
  background-color:white;
 
}

k
{
	font-size:10px;
}
ttl
{ font-size:20px;
}
</style>
</head>

<?php

$dbname="usershare"; 
$db=mysqli_connect('localhost','root','',$dbname);
$user=$_SESSION["username"];
$story= mysqli_query($db, "SELECT story,title,dandt FROM story WHERE username='$user' order by dandt desc");

while($rs=mysqli_fetch_array($story))
{
echo "<div class='card'><ttl><b>$rs[1]</b></ttl><br><k>$rs[2]</k><br>$rs[0]</div><br>"; 
}
?>