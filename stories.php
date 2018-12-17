<?php

$dbname="usershare"; 
$db=new mysqli('localhost','root','',$dbname);
$user=$_SESSION["username"];
$story= mysqli_query($db, "SELECT story,title,dandt FROM story WHERE username='$user' order by dandt desc");

while($rs=mysqli_fetch_array($story))
{
echo "<b>$rs[1]</b>"; echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
echo $rs[2];
echo '<br>';
echo $rs[0];
echo '<hr>';
}
?>