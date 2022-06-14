<?php

session_start();

?>

    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

    <html xmlns="http://www.w3.org/1999/xhtml">

    <head>
        <!--Connecting the CSS sheet to the HTML file-->
        <link rel="stylesheet" href="Style.css" type="text/css" />

        <title></title>
    </head>

    <body>
        <div id="wrapper">

            <!--Div containing the elements for the top navigation bar, will continue for whole site-->
            <div class="topnav"><a class="active" href="index.html">Home</a> <a href="About.html">About</a> <a href="youritems.html">Your Items</a> <a href="contact.html">Contact</a> <a href="login.html">Log in</a> <a href="login.html">Register</a>

                <form id="gobutton" action="Search.php" method="POST" name="Search">
                    <input type="text" name="Search" placeholder="Listings..." />
                    <input type="submit" value="Go" />
                </form>

                <img src="Images/Homepage/logo.png" id="Mainlogo" name="Mainlogo" /></div>

            <form id="logoutbutton" action="logout.php" method="POST">
                <input type="submit" Value="Log out">
            </form>

            <!--Adding image for background-->
            <div class="background">

                <body background="images\Homepage\clothes.jpeg">
            </div>

            <div class="textbox1" style="width:500px;height:500px;border:2px solid #000; 
margin-top:20px;margin-left:240px;background-color:#FFFFFF;text-align:center;
border-radius: 25px;position:absolute;">
                <!--Setting so users name appears on welcome message-->
                <h1>Welcome <?php echo $_SESSION['username']; ?> </h1>

                <h2>Your Listed Items</h2>
            </div>

            </body>
        </div>

    </html>