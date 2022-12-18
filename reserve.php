<?php
require "connect.php";
$name=$_POST['fname'];
$phno=$_POST['phno'];
$nos=$_POST['nos'];
$dandt=$_POST['dandt'];
//$con=mysqli_connect('localhost','root','','arjun');
$query="INSERT INTO `details`( `Full Name`, `PhoneNumber`, `NumberOfSeats`, `DateandTime`) VALUES ('$name','$phno','$nos','$dandt')";
include "./index.html";
$run=mysqli_query($conn,$query);
if($run == TRUE)
   echo "SIGNUP SUCESSFULLY";
else
    echo "ERROR!";
    //INSERT INTO `details`( `Full Name`, `PhoneNumber`, `NumberOfSeats`, `DateandTime`) VALUES (`$name`, `$phno`, `$nos`, `$dandt`)
?>