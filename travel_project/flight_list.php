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
	background: url("https://img.freepik.com/free-photo/airport-terminal_1417-1456.jpg?w=1380&t=st=1667379922~exp=1667380522~hmac=cb7ff6879fea4b79d315076e6dbf2d7a0da74ec687c4feccb7b779c4b2a6ad6d");
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
  padding-right: 175px;
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
			background-color: lightskyblue;
			width: 100%;
			padding-top: 1%;
			border: 1px solid lightskyblue;


			
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
		<form class="f1">
		<div class="m1">
		<b><label class="l1">From:</label></b>
		<input class="s1" type="text" placeholder="Delhi" id="l1">
		<b><label class="l1">To:</label></b>
		<input class="s1" type="text" placeholder="Mumbai" id="l2">
		<input type="date" class="s1" id="l3">
		<input type="submit" value="Go" class="su1" >
	</div>
		<br></br>
	</form>
		<?php echo $user_data['user_name']; ?>
		<div id="table_body">
		</div>
		<script src="fl.js"></script>
	</body>

	<script type="text/javascript">
		function addIT(a,b,c,d){
			var ob = {};
			ob.flno = a;
			ob.src = b;
			ob.dst = c;
			ob.cost = d;

			console.log(ob);
			$.ajax({
				url:"insIT.php",
				method:"post",
				data:ob,
				success: function(res){
					console.log(res)
				}
			})
			
		}
	</script>
</html>