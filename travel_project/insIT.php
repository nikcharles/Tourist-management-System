<?php
	session_start();
	include("connection.php");
	include("functions.php");
	$user_data = check_login($con);

	print_r($_POST);
	print_r( $_POST["flno"]);

	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "Rishabh@26";
	$dbname = "rishi";

	if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
	{

		die("failed to connect!");
	}
	$user = $user_data['user_name'];
	$fno = $_POST['flno'];
	$src = $_POST['src'];
	$dst = $_POST['dst'];
	$price = $_POST['cost'];

	$query = "insert into flights values ('$user','$fno','$src','$dst','$price')";
	mysqli_query($con, $query);
	header("Location: http://localhost/travel_project/itenary.php");
?>