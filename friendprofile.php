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
  padding: 20px
  max-width: 300px;
  background-color:white;
  
}
.card2
{
	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: auto;
  text-align: center;
  font-family: arial;
  padding: 20px
  max-width: 300px;
  background-color:white;
  
}

.title {
  color: grey;
  font-size: 18px;
}

.header {
  padding: 10px 16px;
  background: #FF3B3F;
}

a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}

button:hover, a:hover {
  opacity: 0.7;
}
k
{
	font-size:10px;
}
ttl
{ font-size:25px;
}
</style>
</head>
<body  bgcolor="#A9A9A9">
<div class="header" id="myHeader"><center><img src="trlogo.png"  height=150></center>
</div>
<div class="card" style="position: absolute; left: 700px; top:200px; height:400;">
<?php
session_start();
$x=mysqli_connect("localhost","root","","usershare");
if($x){
	$user=$_REQUEST['friend'];
	echo "<ttl>$user</ttl>";
if(mysqli_query($x,"select active from activestatus where username='$user'")=='y')
{echo "<img src='upload/gdot.png' width=10 >";	}
	echo "<br>";
$url=mysqli_query($x,"SELECT image from profile2 WHERE username='$user'");
if($rs=mysqli_fetch_array($url))
{	
echo "<img src='upload/$rs[0]' width=200>";
echo "</div><br>";
}
}
$story= mysqli_query($x, "SELECT story,title,dandt FROM story WHERE username='$user' order by dandt desc");
echo "<div style='position: absolute; top:500px; left:300px; width:1000px;'>";
while($rs=mysqli_fetch_array($story))
{
echo "<div class='card2'><ttl><b>$rs[1]</b></ttl><br><k>$rs[2]</k><br>$rs[0]</div><br>"; 
}
echo "</div>";
?>
</html>