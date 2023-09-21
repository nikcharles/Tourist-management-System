<?php 
session_start();
include("connection.php");
include("functions.php");
$user_data = check_login($con);
?>

<!Doctype html>
<html>
	<head>
		<title>API testing</title>
		<script src="https://code.jquery.com/jquery-2.1.4.js"></script>
		<style>
body{
	background: url("https://img.freepik.com/free-photo/indian-food-circular-frame-with-copy-space_23-2148747658.jpg?w=996&t=st=1667407991~exp=1667408591~hmac=ea6945ecf66437a8b9021259c157e01affe6e6cdffd4526c4703275d15f9c4f2");
}
.topnav {
  overflow: hidden;
  background-color: white;
  margin: auto;
  width: 70%;
  margin-top: 15px;
  border-style: solid;
  border-color: black;
}

.topnav a {
  float: left;
  color: black;
  text-align: center;
  padding: 14px 16px;
  padding-right: 120px;
  text-decoration: none;
  font-size: 20px;
}

button{
	margin-top: 17px;
}

.topnav:hover {
  background-color: lightblue;
}
.f1{
			float: left;
			background-color:lightbrown;
			width: 100%;
			padding-top: 1%;
			border: 1px solid lightbrown;


			
		}
		.s1{
			padding-left: 3%;
			padding:0.3%;
		}
		.l1{
			font-size: 20px;
			padding-left: 5%;
		}
		.su1{
			margin-left:4%;
			font-size: 17px;

		}
		.m1{
			margin-left: 26%;
		}


</style>
	</head>
	<body>
		<div class="f1">
		<div class="m1">
		<b><label class="l1">Enter Location:</label></b>
		<input class="s1" type="text" placeholder="Delhi">
		<input type="submit" value="Go" class="su1">
	</div>
		<br></br>
	</div>
		<?php echo $user_data['user_name']; ?>
		<div id="table_body">
		</div>
		<script src="fol.js"></script>
	</body>

	<script type="text/javascript">
		function addIT(a,b,c,d){
			var ob = {};
			ob.name = a;
			ob.star = b;
			ob.cuisine = c;
			ob.status = d;

			console.log(ob);
			$.ajax({
				url:"insIT2.php",
				method:"post",
				data:ob,
				success: function(res){
					console.log(res)
				}
			})
			
		}
	</script>
</html>