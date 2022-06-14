<?php 
$con=mysqli_connect("localhost","root","","userdetails");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

if(isset($_POST['submit'])){
    $to = "samhughes98@hotmail.co.uk"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $fullname= $_POST['fullname'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $fullname . " " ." wrote the following:" . "\n\n" . $_POST['comment'];
    $message2 = "Here is a copy of your message " . $fullname . "\n\n" . $_POST['comment'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>


<!DOCTYPE html>
<html>
<div id="wrapper">
<!--Connecting the CSS sheet to the HTML file-->
<link rel="stylesheet" href="Style.css">

<!--Div containing the elements for the top navigation bar, will continue for whole site-->
<div class="topnav">
<a href="homepage.html">Home</a>
<a href="About.html">About</a>
<a href="list.php">Your Items</a>
<a  class="active" href="contact.html">Contact</a>
<a href="login.php">Log in</a>
<a href="login.php">Register</a>
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

<div class="textbox1"style="width:450px;height:400px;border:2px solid #000; 
margin-top:10px;margin-left:500px;background-color:#FFFFFF;text-align:center;border-radius: 25px;">
<br> <u>Contact us</u> 
<br><br>
Enrolment enquiries

Tel: +44 (0)29 20​20 5669 
<br>
email: enrolment@cardiffmet.ac.uk
<br><br>
All other enquiries
<br><br>
For all other enquiries please contact us via our email address, which is: izone@cardiffmet.ac.uk
<br>
Or call in to the izone:
Monday 9.00am - 5.00pm
Tuesday 9.00am - 5.00pm
Wednesday 10.00am - 5.00pm
Thursday 9.00am - 5.00pm
Friday 9.00am - 4.30pm
</div>

<div style="width:450px;height:400px;border:2px solid #000;
 margin-top:-400px;margin-left:0px;background-color:#FFFFFF;text-align:center;
 border-radius: 25px;">

<!--form created for the Contact methods. Contains a text box for input and also email address and name to be contacted back-->
<form>
<br><br><br>
Full Name: <input type="text" name="fullname"  style="margin-left:20px";>
<br><br>
Email Address: <input type="text" name="email"><br><br>
</form>
<br>
<textarea rows="12" cols="50" name="comment" form="usrform">
Enter text here...</textarea>
<br><br>
  <form id="gobutton" method="POST" name="emailcontact">
    <input type="submit" value="Go" />
  </form>

</div>

</body>
</head>
</div>
</html>