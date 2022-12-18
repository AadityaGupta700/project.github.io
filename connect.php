<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);
//mysqli_select_db($conn,'tablereservation');
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
else{
  //echo "Connected successfully";
}
if($res=mysqli_select_db($conn,'tablereservation'))
echo "database selected successfully";
?>