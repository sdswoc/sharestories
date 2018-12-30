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

.name {
  color: black;
  font-size: 22px;
  font-family: Verdana;
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
nav {
  float: right;
  width: 20%;
  background: #ccc;
  padding: 20px;
}
</style>
</head>
<script>
function shows()
{cf.style.visibility="visible";}
function hide()
{cf.style.visibility="hidden";}
</script>
<body>

<div class="card" >
<?php
session_start();
$x=mysqli_connect("localhost","root","","usershare");
if($x){
	$user=$_SESSION['username'];
	echo "<div class='name'>$user</div>"; 
	echo "<br>";
$url=mysqli_query($x,"SELECT image from profile2 WHERE username='$user'");
if($rs=mysqli_fetch_array($url))
{	

if($rs[0]=='')
{echo "<img src='upload/download.jpg' width=300 >";}
else
{echo "<img src='upload/$rs[0]' width=300 >";}
}
else
{echo "<img src='upload/download.jpg' width=300 >";}
}
?>
<p onmouseover="shows()" > Upload profile picture </p> 
<div id="cf" style="visibility:hidden;"  >
<form action="profile.php" method="post" enctype="multipart/form-data">
<input type="file" name="file"> <input type=submit name="pupload" value="submit" onmouseout=hide()>
	</form></div></div>
</body>
</html>