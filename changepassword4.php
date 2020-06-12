<!DOCTYPE html>
<html>
<title> Sign up at ShareStories</title>
<style>
.header {
  padding: 10px 16px;
  background: #FF3B3F;
}

input[type=text], select {
  width: 45%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=password], select {
  width: 45%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=submit] {
  width: 45%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

form {
  border-radius: 5px;
  background-color: #FF3B3F;
  padding: 20px;
  width : 60%;
}
</style>
<body bgcolor= #A9A9A9>
<div class="header" id="myHeader"><center><img src="trlogo.png"  height=130></center>
</div>
<br><br><br>
<center>


<div class="form">
<h1>Change your password</h1>
  <form action="pchange.php">
	<input type="password" id="currentpassword" name="currentpassword" placeholder="Enter Current Password">
	<br>
    <input type="password" id="newpassword" name="newpassword" placeholder="Enter New Password">
  <br>
    <input type="password" id="confirmpassword" name="confirmpassword" placeholder="Confirm new Password">
	<br>
    <input type="submit" value="Submit">
	<h4> Password updated.
  </form>
</div>
</center>
</body>
</html>
