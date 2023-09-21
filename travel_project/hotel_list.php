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
	background: url("https://img.freepik.com/free-photo/cozy-studio-apartment-with-bedroom-living-space_1262-12323.jpg?w=996&t=st=1667403494~exp=1667404094~hmac=c9c05912d70e937f9b586039850946ed006353241770c62ab01d0d028afbc3f1");
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
		<input class="s1" type="text" placeholder="Delhi" id="gid">
		<button value="Go" class="su1" onclick="go();">GO</button>
	</div>
		<br></br>
	</div>
		<?php echo $user_data['user_name']; ?>
		<div id="table_body">
		</div>
		<script src="hl.js"></script>
	</body>

	<script type="text/javascript">
		function addIT(a,b,c,d){
			var ob = {};
			ob.title = a;
			ob.addr = b;
			ob.star = c;
			ob.provider = d;

			console.log(ob);
			$.ajax({
				url:"insIT1.php",
				method:"post",
				data:ob,
				success: function(res){
					console.log(res)
				}
			})
			window.location.href="itenary.php";
		}
	</script>
</html>