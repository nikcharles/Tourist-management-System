<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//save to database
			$query = "insert into users (user_name,password) values ('$user_name','$password')";

			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
</head>
<body>

	<!--<style type="text/css">
	
	#text{

		height: 25px;
		border-radius: 5px;
		padding: 4px;
		border: solid thin #aaa;
		width: 100%;
	}

	#button{

		padding: 10px;
		width: 100px;
		color: white;
		background-color: lightblue;
		border: none;
	}

	#box{

		background-color: grey;
		margin: auto;
		width: 300px;
		padding: 20px;
	}

	</style>
	!-->
<!--
	<div id="box">
		
		<form method="post">
			<div style="font-size: 20px;margin: 10px;color: white;">Signup</div>

			<input id="text" type="text" name="user_name"><br><br>
			<input id="text" type="password" name="password"><br><br>

			<input id="button" type="submit" value="Signup"><br><br>

			<a href="login.php">Click to Login</a><br><br>
		</form>
	</div>!-->
</body>
</html>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login page</title>
   <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="loginstyle.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Comforter+Brush&family=Heebo:wght@400;500;600;700&display=swap"
    rel="stylesheet">
  <style type="text/css">
.navbar-custom {
    background-color: lightseagreen;
    size: 20%;
}
/* change the brand and text color */
.navbar-custom .navbar-brand,
.navbar-custom .navbar-text {
    color: 
}
/* change the link color */
.navbar-custom .navbar-nav .nav-link {
    color: rgba(255,255,255,.5);
}
/* change the color of active or hovered links */
.navbar-custom .nav-item.active .nav-link,
.navbar-custom .nav-item:hover .nav-link {
    color: #ffffff;
}
body{
  background: var(--white-1);
  font-size: 1.3rem;
}
 form{
 margin-left: 53%;
 padding:5%;
 width: 25%;
 border-width: 1px;
 border-style: solid;
 border-radius: 30%;
 background-color: white;

 }
 label{
  color: black;
 display: inline-block;
 width: 130px; 
 text-align: left;
 padding: 2%;
 font-family: cursive;
 font-weight:500px;
 font-size: 20px;
 margin-left: 10%;

 }
 .a1{
  width: 60%;
  padding: 10px;
margin-left: 30%;
 }
 h1{
 text-align: center;
 color: darkred;
 border: 2px;
 background-color: floralwhite;
 }

 .btn {
  border: 2px;
  color: black;
  border-radius: 20%;
  background-color:lightskyblue;
  margin-left:35%;
  margin-top: 4%;
  font-size: 35px;
}
.btn-hover{
  color: darkred;
 }

#img{
  background: url("https://okcredit-blog-images-prod.storage.googleapis.com/2020/12/tourism1.jpg");
  background-repeat: repeat;
  background-size: 50%;

  
}
.write {
  font-family: cursive;
  font-size: 50px;
  color: floralwhite;
  margin: 0%;
  margin-left:2%;
  padding: 0%;
}
  </style>
</head>
<body>
<nav class="navbar navbar-expand-sm navbar-custom">
  <p class="write">Let your Journey Begins......</p>
   </br>
</nav>
<div id="img">
   <br><br><br><br><br>
<form method="post">
			<div style="font-size: 20px;margin: 10px;color: white;">Signup</div>
			<label>User-Name</label>
			<input id="text" type="text" name="user_name"><br><br>
			<label>Password</label>
			<input id="text" type="password" name="password"><br><br>
			<input id="button" type="submit" value="Signup"><br><br>

			<a href="http://localhost/travel_project/login.php">Click to Login</a><br><br>
		</form>
<div>
</body>
</html>
