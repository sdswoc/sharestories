<?php
include'init.php';
if(empty($_post)===false)
{	$username=$_post['username'];
	$password=$_post['password'];}
	if(empty($username)===true||empty($password)===true)
	{$errors[]='U need to enter a password or a username';}
	elseif(userexist($username)===false)
	{$errors[]='Wecant find this user';}
	else 
	{
		$login=login($username,$password)
			if($login===false)
			{$errors[]='Username password combination is incorrect';}
	else {echo 'okay'}}
print_r($errors);
?>