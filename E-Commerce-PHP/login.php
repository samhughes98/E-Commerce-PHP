<!DOCTYPE html>
<html>
<div id="wrapper">

    <head>
        <!--Connecting the CSS sheet to the HTML file-->
        <link rel="stylesheet" href="Style.css">
        <!--Div containing the elements for the top navigation bar, will continue for whole site-->
        <div class="topnav">
            <a href="index.html">Home</a>
            <a href="About.html">About</a>
            <a href="list.php">Your Items</a>
            <a href="contact.html">Contact</a>
            <a class="active" href="login.php">Log in</a>
            <a class="active" href="login.php">Register</a>
            <form id="gobutton" action="homepage.php" method="POST">
                <input type="text" name="Search" placeholder="Listings...">
                <input type="submit" Value="Go">
            </form>
            <img src="Images/Homepage/logo.png" id="Mainlogo">
        </div>
    </head>

    <form id="logoutbutton" action="logout.php" method="POST">
        <input type="submit" Value="Log out">
    </form>

    <body>

        <!--Adding image for background-->
        <div class="background">

            <body background="images\Homepage\clothes.jpeg">
        </div>

        <!--FIELDS FOR ITEMS LISTED BY USER-->

        <!--Creating the text box for the items currently listed-->
        <div style="width:450px;height:400px;border:2px solid #000;
margin-top:10px;background-color:#FFFFFF;text-align:center;
border-radius:25px;Position:relative;overflow:scroll;">

            <?php
$con=mysqli_connect("localhost","root","","userdetails");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
//select all data from items db
$result = mysqli_query($con,"SELECT * FROM items");
//creating a table for items listed again, just like list.php page.
echo "<table border='1'>
<tr>
<th>Item Photo</th>
<th>Item Name</th>
<th>Item Description</th>
<th>Keywords</th>
<th>Price</th>
</tr>";

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

mysqli_close($con);
?>

        </div>

</div>
</body>
</head>

</html>

<!--LOGIN FIELDS-->

<!--Creating the textbox area for the login details-->
<div class="textbox1" style="width:250px;height:400px;border:2px solid #000; 
margin-top:-403px;margin-left:510px;background-color:#FFFFFF;text-align:center;
border-radius: 25px;position:absolute;">

    <!--Register section for new users-->
    <form action="db.php" method="post" name="register">
        <br>New Users
        <br>
        <br> First Name:
        <input type="text" name="fname" Style="margin-left:5px;">
        <br>
        <br> Last name:
        <input type="text" name="lname" Style="margin-left:10px;">
        <br>
        <br> Email:
        <input type="text" name="email" Style="margin-left:38px;">
        <br>
        <br>
        <br> username:
        <input type="text" name="username" Style="margin-left:13px;">
        <br>
        <br> password:
        <input type="text" name="password" Style="margin-left:15px;">
        <br>
        <br>
        <input type="submit" value="Submit">
    </form>
    <br>
</div>

<!--Existing user login section-->
<div class="textbox1" style="width:250px;height:400px;border:2px solid #000; 
margin-top:-403px;margin-left:770px;background-color:#FFFFFF;text-align:center;
border-radius: 25px;position:absolute;">

    <!-- if the user exists, enter username and password in forms and click button for script to check if user exists on the db -->
    <form action="existinguser.php" method="post">
        <p>Existing Users</p>
        Username:
        <input type="text" name="username" Style="margin-left:17px;margin-top:0px;">
        <br>
        <br> Password:
        <input type="text" name="password" Style="margin-left:20px;">
        <br>
        <br>
        <input type="submit" value="Submit">
    </form>

</div>
</div>
</body>
</head>
</div>

</html>