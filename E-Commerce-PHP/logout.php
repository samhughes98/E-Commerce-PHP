<?php   
//Session start code
session_start(); 
//Destroy session code
session_destroy(); 
//Send user to goodbye.html to show youve logged out
header("location:/goodbye.html"); 
exit();
?>

