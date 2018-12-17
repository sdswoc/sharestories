<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: auto;
  text-align: left;
  font-family: arial;
  padding: 5px
  max-width: 300px;
  
}

.title {
  color: grey;
  font-size: 18px;
}

.img{}

a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}

button:hover, a:hover {
  opacity: 0.7;
}
</style>
</head>
<body>

<div class="card">
<?php
session_start();
$x=mysqli_connect("localhost","root","","usershare");
if($x){
	$user=$_SESSION['username'];
	echo $user; echo "<br>";
$url=mysqli_query($x,"SELECT image from profile2 WHERE username='$user'");
if($rs=mysqli_fetch_array($url))
{	

if($rs[0]=='')
{echo "<img src='upload/download.jpg' width=200 >";}
else
{echo "<img src='upload/$rs[0]' width=200 >";}
}
else
{echo "<img src='upload/download.jpg' width=200 >";}
}
?>
<form action="profile.php" method="post" enctype="multipart/form-data">
<input type="file" name="file"><br> <br> <input type="submit" name="pupload" value="submit">
	</form></div>
</body>
</html>