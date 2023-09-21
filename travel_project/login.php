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

			//read from database
			$query = "select * from users where user_name = '$user_name' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['user_name'] = $user_data['user_name'];
						header("Location: home_logged.php");
						die;
					}
				}
			}
			
			echo "wrong username or password!";
		}else
		{
			echo "wrong username or password!";
		}
	}

?>

<!--
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login page</title>
   <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

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
 background: url("http://images.mini-ielts.com/images/2017/17/tourism-01.jpg");

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
 margin-left: 15%;

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
<form method="POST" class="full">
 <h1>Login</h1>
 <label><b>User-Name:</b> </label>
 <input type="text" name="user_name" placeholder="tejes" class="a1" required ></br>
 <label><b>Password</b></label>
 <input type="password" name="password" class="a1" required></br>
<input type="submit" name="submit" value="submit" class="btn">
 </br>
</br> 
</form>
<div>
</body>
</html>-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="s.css">
</head>
<body>
    <div class="box">
        <form class="form" method="POST">
            <h2>Login</h2>
            <div class="inputBox">
                <input type="text" name="user_name" required>
                <span>Username</span>
                <i></i>
            </div>
            <div class="inputBox">
                <input type="password" name="password" required>
                <span>Password</span>
                <i></i>
            </div>
            <div class="links">
                <a href="signup.php">SignUp</a>
            </div>
              <input type="submit" class="button"><span>LOGIN</span>
        </div>
    </div>
</body>
</html>