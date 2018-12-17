<?php
session_start();
$_SESSION['username']="";
header('Location: login2.php');
?>