<!--PHP script to allow existing users to logon with their username and password-->
<?php

session_start();

$con = mysqli_connect("localhost","root","","userdetails");

mysqli_select_db($con, 'logon');

$name = $_POST['username'];
$pass = $_POST['password'];


$s = "select * from logon where username = '$name' && password = '$pass'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

//If logon name exists, go to sucess.php page. if not, redirect back to logon.html for user to try again
if ($num == 1){
	$_SESSION['username'] = $name;
	header('location:success.php');
  }else{
	  header('location:login.php');
  }
?>