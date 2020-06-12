<!DOCTYPE html>
<html>
<title>ShareStories: Let out the story in you</title>
<head>

<link href="https://fonts.googleapis.com/css?family=Anonymous+Pro:400,700" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body, html {
  height: 100%;
  margin: 0;
  font-family: Georgia;
}

* {
  box-sizing: border-box;
}
/*for dual bg*/
leftq {
  float: left;
  width: 60%;
  height: 500px;
  background: #A9A9A9;
  padding: 20px;
}



/* Clear floats after the columns */
section:after {
  content: "";
  display: table;
  clear: both;
}

header {
text-align : center;
background-color : red;
}
.sstitle {
  position: absolute;
  top: 160px;
  left: 16px;
  color : 	black;
  font-family: 'Anonymous Pro', monospace;
  font-size : 80px;
}


.quote1{
  position: absolute;
  top: 260px;
  left: 16px;
  color : black;
  font-family: 'Anonymous Pro', monospace;
  font-size : 40px;
}

.quote2{
  position: absolute;
  top: 360px;
  left: 16px;
  color : black;
  font-family: 'Anonymous Pro', monospace;
  font-size : 20px;
}


/* Add styles to the form container */
.container {
  position: absolute;
  right: 0;
  margin: 20px;
  max-width: 300px;
  padding: 16px;
  background-color:#FF3B3F;
  color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}


/* Set a style for the submit button */
.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 16px 32px;
  width : 100%;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
  cursor: pointer;
}

.button1 {
  background-color: #b9ffcb; 
  color: black; 
}

.button1:hover {
  background-color: #4CAF50;
  color: white;
}

.button2 {
  background-color: #f37cb3; 
  color: black; 
}

.button2:hover {
  background-color: #ee1118;
  color: white;
}


.header {
  padding: 10px 16px;
  background: #FF3B3F;
}


</style>
<script>
function shows()
{
	document.location.href="register.php";
} </script>
</head>
<body bgcolor="#EFEFEF">

<div class="header" id="myHeader"><center><img src="trlogo.png"  height=130></center>
</div>


  <section>
   <leftq> 
<div class="sstitle">ShareStories</div>
<div class="quote1"> We let your story grow here...</div>
<div class="quote2"> There's a story stuck in your heart, gasping for air. <br> Let it out here! <br><br> Sign up today and show the world the storyteller hidden in you.</div>
</leftq>

<div class="container"  ><form action="login3.php" >

    <h1>Login</h1>

    <label for="user"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>

    <button type="submit" class="button button1">Login</button></form>
	
	<p> Don't have an account yet?</p>
	
	<button class="button button2" onclick="shows()"> Sign up </button>
  </div>


</section>
</body>
</html>
