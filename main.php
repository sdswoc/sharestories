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
  color:tomato;
  text-align:center;
}
</style>
<h1> ShareStories </h1>
<h2>A social media to share stories</h2>
<div style="position: absolute; left: 10px; top:100px; width:200; height:400;">
<?php include 'userprofile.php'; ?> </div>
<div style="position: absolute; left: 500px; top:300px; width:200; height:400;">
<?php include 'share.php'; ?> </div>
<div style="position: absolute; left: 500px; top:700px; width:200; height:400;">
<?php include 'stories.php'; ?> </div>
<div style="position: absolute;  top:0px; ">
<?php include 'search.php'; ?> </div>
<div style="position: absolute;  top:0px; left:1000px ">
<a href= logout.php> Logout </a></div>
</html>