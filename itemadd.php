<?php

$con = mysqli_connect("localhost", "root", "", "userdetails");
 //connecting to database on SQL
 //Below is error message if unable to connect
if($con === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
//choosing targer directory for images to upload to
$target = "images/";
$target = $target . basename( $_FILES['photo']['name']); 
//set variables to read string data inserted into relevant field
$itemname = mysqli_real_escape_string($con, $_REQUEST['itemname']);
$itemdesc = mysqli_real_escape_string($con, $_REQUEST['itemdesc1']);
$keywords = mysqli_real_escape_string($con, $_REQUEST['keywords1']);
$price = mysqli_real_escape_string($con, $_REQUEST['price1']);
$photo=($_FILES['photo']['name']); 
//inserts data into database, into the relevent rows respectively
$sql = "INSERT INTO items (photo, itemname, itemdesc, keywords, price) VALUES ('$photo','$itemname', '$itemdesc', '$keywords', '$price')";
if(mysqli_query($con, $sql)){
    echo "$itemname has been successfully added to the system.";
} else{
    echo "Not able to complete $sql. " . mysqli_error($con);
}
//setting image uploaded to be saved in directory as 'file name'.'file extension'
if(move_uploaded_file($_FILES['photo']['tmp_name'],$target))
{
//outcome message if sucessfully uploaded
echo "The file ". basename( $_FILES['photo']
['name']). " has been uploaded, and your information has been added to the directory";
}
else {
//error message if uploading isnt possible
echo "Sorry, there was a problem uploading your file."; 
}
//send user to list.php at end of script
    echo "<script> location.href='list.php'; </script>";
        exit;
 
?>