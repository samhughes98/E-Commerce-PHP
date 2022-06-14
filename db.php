<?php
//stars session
session_start();
//connectes to relevant database
$con = mysqli_connect("localhost","root","","userdetails");

mysqli_select_db($con, 'logon');
//set variables for the register forms
$name = $_POST['username'];
$pass = $_POST['password'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
//data put into forms checked against data on logon database to check if already exists
$s = "select * from logon where username = '$name'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

//if already exists output message saying so.
if ($num == 1){
	echo"Username already taken";
}
//if successful, insert data into logon db in the relevant form
else{
	$reg= "Insert into logon(username, password, fname, lname, email) values ('$name','$pass','$fname','$lname','$email')";
	mysqli_query($con, $reg);
     
	 //send user to login.php if successful
	 echo "<script> location.href='login.php'; </script>";
	  
}
?>