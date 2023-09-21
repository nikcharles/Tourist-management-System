<?php 
session_start();
include("connection.php");
include("functions.php");
$user_data = check_login($con);


echo "<!DOCTYPE html><html><head><title>first web dev</title><link rel='stylesheet' type='text/css' href='ss.css'><link rel='stylesheet' href='https://www.w3schools.com/w3css/4/w3.css'> </head><body style="background-image:linear-gradient(rgba(0,0,0,0.1),rgba(0,0,0,0.1)), url(../im.png); height: 100vh; background-size: cover; background-position: center;"> ";


      $user= $user_data['user_name'];
      $sql = "select * from flights WHERE user='$user'";
      $result = $con->query($sql);
echo"<div class="title"><div class="w3-center"><button class="w3-button demo" onclick="currentDiv(1)">flight itenary</button> <button class="w3-button demo" onclick="currentDiv(2)">hotel itenary</button><button class="w3-button demo" onclick="currentDiv(3)">food itenary</button> </div>";
echo"<div class="w3-content" style="max-width:800px"><div class="mySlides" style="width:100%">";
      echo "<table style='margin:auto;' border='1' >";
      echo "<caption><strong><h1>My Flights</h1></strong></caption>";
    echo "<th>Flight-no</th><th>Start</th><th>Destination</th><th>Price</th>";
      if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row['fno'] . "</td><td>" . $row['src'] . "</td><td>" . $row['dst'] . "</td><td>" . $row['price'] . "</td></tr>";
  }

} else {
  echo "0 results";
}
echo "</div>";



      $sql = "select * from hotels WHERE user='$user'";
      $result = $con->query($sql);
echo "<div class="mySlides" style="width:100%">";
      echo "<table style='margin:auto;' border='1' >";
      echo "<caption><strong><h1>My Hotels</h1></strong></caption>";
    echo "<th>Hotel-name</th><th>Address</th><th>Rating</th><th>Provider</th>";
      if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row['title'] . "</td><td>" . $row['addr'] . "</td><td>" . $row['star'] . "</td><td>" . $row['prov'] . "</td></tr>";
  }
} else {
  echo "0 results";
}
echo "</div>";

   
   $sql = "select * from foods WHERE user='$user'";
      $result = $con->query($sql);
echo "<div class="mySlides" style="width:100%">";
      echo "<table style='margin:auto;' border='1' >";
      echo "<caption><strong><h1>My Restaurants</h1></strong></caption>";
    echo "<th>Restaurant-Name</th><th>Rating</th><th>Cuisine</th><th>Status-Now</th>";
      if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row['name'] . "</td><td>" . $row['star'] . "</td><td>" . $row['cuisine'] . "</td><td>" . $row['status'] . "</td></tr>";}

} else {
  echo "0 results";
}
echo "</div>";
echo "</div>";
echo"<script>var slideIndex = 1;showDivs(slideIndex);function plusDivs(n) {  showDivs(slideIndex += n);}function currentDiv(n) {  showDivs(slideIndex = n);function showDivs(n) {  var i;  var x = document.getElementsByClassName("mySlides");  var dots = document.getElementsByClassName("demo");  if (n > x.length) {slideIndex = 1}      if (n < 1) {slideIndex = x.length}  for (i = 0; i < x.length; i++) {    x[i].style.display = "none";    }  for (i = 0; i < dots.length; i++) {    dots[i].className = dots[i].className.replace(" w3-red", "");  }  x[slideIndex-1].style.display = "block";    dots[slideIndex-1].className += " w3-red";}</script>";   
  

echo "</body></html>";

?>
 