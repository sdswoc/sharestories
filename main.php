<!DOCTYPE html>
<style>
h1 {
  font-size: 3.5em;
  font-family:ink free;
  font-style:bold;
  text-align:center;
  color: purple;
}
h2 {
  font-size: 1.5em;
  font-family:Bahnschrift Light;
  color:black;
	text-align:center;}
.button {
  background-color: #FF3B3F;
  border: none;
  color: black;
  padding: 16px 32px;
  width : 100%;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  font-family:Times new Roman;
  margin: 4px 2px;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
  cursor: pointer;
}
.nav {
  float: right;
  width: 25%;
  background: #FF3B3F;
  font-family: Times new Roman;
  font-size: 10px;
  padding: 20px;
}
.header {
  padding: 10px 16px;
  background: #FF3B3F;
  
}
</style>
<script>
function shows3()
{
	document.location.href="share.php";
} </script>
<meta name="viewport" content="width=device-width, initial-scale=1"> <body bgcolor=#A9A9A9>
<div class="header" id="myHeader"><center><img src="trlogo.png"  height=150></center>
</div>
<div style="position: absolute; left: 10px; top:100px; width:200; height:400;">
<?php include 'userprofile.php'; ?> </div>
<div style="position: absolute; left: 900px; top:300px; ">
<button class="button" onclick="shows3()"> Create story </button> </div>
<div style="position: absolute; left: 400px; top:400px; width:1000px;">
<div class="card"><h2> Your story </h2></div> <br>
<?php include 'stories.php'; ?> </div>
<div class="nav">
<?php include 'search.php'; ?><br> <a href= logout.php> Logout </a> <br> <a href= changepassword.php> Change Password </a></div>
 </body>
</html>