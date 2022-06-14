<!DOCTYPE html>
<html>
<head>
<!--Connecting the CSS sheet to the HTML file-->
<link rel="stylesheet" href="Style.css">

 <div id="wrapper">
 
<!--Div containing the elements for the top navigation bar, will continue for whole site-->
<div class="topnav">
<a href="homepage.html">Home</a>
<a href="About.html">About</a>
<a class="active" href="youritems.html">Your Items</a>
<a href="contact.html">Contact</a>
<a href="login.php">Log in</a>
<a href="login.php">Register</a>
<form id="gobutton" action="homepage.php" method="POST">
<input type="text" name="Search" placeholder="Listings...">
<input type="submit" Value="Go">
</form>
<form id="gobutton" action="search.php" method="POST">
<input type="submit" Value="Go">
</form>
<img src="Images/Homepage/logo.png" id="Mainlogo">
</div> 
</head>


<body>
<!--Adding image for background-->
<div class="background">
<body background="images\Homepage\clothes.jpeg">
</div>
<!-- logout button -->
<div>
<form id="logoutbutton" action="logout.php" method="POST">
    <input type="submit" Value="Log out">
    </form>
</div>
<!-- creating box area to contain item upload forms -->
<div href="#itemdesc"style="width:300px;height:200px;border:2px solid #000; 
margin-top:100px;background-color:#FFFFFF;text-align:center;border-radius: 25px; position:relative;">
<br><br>
<!-- form to allow user to upload items. contains item name, description, keywrods, price and a photo -->
<form action="itemadd.php" enctype="multipart/form-data" method="POST"> 
Item Name: <input id="addname" type="text" name="itemname"/><br> 
Item Description: <input id="adddesc" type="text" name = "itemdesc1"/><br> 
Keyword tags: <input id="addkeyword" type="text" name = "keywords1"/><br> 
Price: <input id="addprice" type="text" name ="price1"/><br> 
Photo: <input id="addphoto" type="file" name="photo"/><br>
<input id="addbtn" type="submit" value="Add" name="submit">   

</form>
<br>
<br>
</div>

<!-- containing box area to allow list view of uploaded items -->
<div class="textbox1"style="width:630px;height:420px;border:2px solid #000; 
margin-top:-300px;margin-left:320px;background-color:#FFFFFF;text-align:center;
border-radius: 25px; position:absolute;overflow:scroll;"/>
<table>

<!-- php code to allow item upload -->
<?php
$con=mysqli_connect("localhost","root","","userdetails");
//Code to connect to mysql database, bove is the address on system, the username and the database
//below is the error outcome, if unable to connect, show error message to user
if (mysqli_connect_errno())
{
echo "Failed to connect to database " . mysqli_connect_error();
}
//setting result variable. script scans databse and selects all data from items database
$result = mysqli_query($con,"SELECT * FROM items");
//setting the table size and dimensions
echo "<table border='1'>
<tr>
<th>Item Photo</th>
<th>Item Name</th>
<th>Item Description</th>
<th>Keywords</th>
<th>Price</th>
</tr>";
//while a result is found, output the data gained from the db to the table set above. 
while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td><img style='width:100px; height:100px'src='images/".$row['photo']."'></td>";
echo "<td>" . $row['itemname'] . "</td>";
echo "<td>" . $row['itemdesc'] . "</td>";
echo "<td>" . $row['keywords'] . "</td>";
echo "<td>" . $row['price'] . "</td>";

}
echo "</table>";
//ends connection
mysqli_close($con);
?>
</table>

</div>

</div>
</body>
</head>
</html>