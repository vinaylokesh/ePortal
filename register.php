<!DOCTYPE HTML>
<html>

<head>
  <title>Organisation e-Portal</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <!-- modernizr enables HTML5 elements and feature detects -->
  <script type="text/javascript" src="js/modernizr-1.5.min.js"></script>
</head>

<body>

</h2>
  <div id="main">
    <header>
      <div id="logo">
        <div id="logo_text">
          <!-- class="logo_colour", allows you to change the colour of the text -->
          <h1><a href="statichome.php">e<span class="logo_colour">-Portal</span></a></h1>
          <h2>Organization e-Portal</h2>
        </div>
      </div>
      <nav>
        <ul class="sf-menu" id="nav">
          <li class="selected"><a href="index.php">Home</a></li>
        
          
          <li><a href="#">Notifications</a>
  		<ul>

		<li><a href="statichome.php">Schedule</a></li>	
		 <li><a href="statichome.php">Events</a></li>		
		  
		<li><a href="statichome.php">Placement News</a></li>	
		<li><a href="statichome.php">Miscellaneous</a></li>	
			
	      </ul>
	</li>
          <li><a href="#">Resources</a>
            <ul>
       
              <li><a href="#">Downloads</a>
                <ul>
                  
                 	<li><a href="statichome.php">Text Books</a></li>	
		 <li><a href="statichome.php">Notes </a></li>
		<li><a href="statichome.php">Others </a><li>
                 
                </ul>
              </li>
            
            </ul>
          </li>
  <li><a href="#">Gallery</a>
<ul>  
     
  <li><a href="#">Achievements</a>
<ul> 
 <li><a href="statichome.php">Insert</a>
  <li><a href="statichome.php">View</a>
</ul>
  <li><a href="#">Paintings</a>
<ul> 
 <li><a href="statichome.php">Insert</a>
  <li><a href="statichome.php">View</a>
</ul>
</ul>
</li>
<li><a href="#">Articles</a>
            <ul>       
  <li><a href="statichome.php">Submit Articles</a>
  <li><a href="statichome.php">Read Articles</a>
</ul>
</li>
  <li><a href="statichome.php">Contact Us</a></li>

 <li><a href="aboutus.php">About Us</a>
              </li> 

	
        </ul>
      </nav>
    </header>
<?php
if(isset($_POST['submit']))
{
if(empty($_POST['gender'])) 
{
echo "Please enter gender";
}
else
{
$conn = mysql_connect("localhost", "root", "123");
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}
$USN=$_POST['USN'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$DOB=$_POST['DOB'];
$gender=$_POST['gender'];
$address=$_POST['address'];
$email=$_POST['email'];
$YOJ=$_POST['YOJ'];
$username=$_POST['username'];
$password=$_POST['password'];
$repassword=$_POST['repassword'];
$hint=$_POST['hint'];
$query ="insert into register1(USN,fname,lname,DOB,gender,address,email,YOJ,username,password,hint) values('$USN','$fname','$lname','$DOB','$gender','$address','$email','$YOJ','$username',md5('$password'),md5('$hint'));";
mysql_select_db('company');
$retval = mysql_query( $query, $conn );
if(! $retval )
{
  die('Could not enter data: ' . mysql_error());
}
echo "Entered data successfully\n";
//mysql_close($conn);
}
}
?>

<center>
<div id="main">
<h1><h1>
<div id="login">
<h3>Register </h3>
<form action="" method="post" name="formone">

<table>
<tr>
<td>
USN </td><td><input id="name" name="USN" placeholder="***********" type="text" required></td></br></br>
</tr>
<tr>
<td>First Name</td><td> <input id="name" name="fname" placeholder="Sachin" type="text" required></td></br></br>
</tr><tr>
<td>Last Name</td><td> <input id="name" name="lname" placeholder="Tendulkar" type="text " required ></td></br></br></br>
</tr><tr><td>Date Of Birth</td> <td><input id="name" name="DOB" type="date" required></td></br></br>
</tr><tr><td>Gender</td><td> <input style="align:jusify" type="radio" name="gender" value="Male">Male</option>
       <input style="align:jusify"type="radio" name="gender" value="Female">Female</option></td></br></br>
</tr><tr><td>Address</td><td> <input style="align:jusify"id="name" name="address"  type="textarea" width="80px" height="80px"></td></br></br>
</tr><tr><td>E-mail</td><td><input id="name" name="email" placeholder="email-id" type="text" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"></td></br></br>

</tr><tr><td>Year Of Joining</td><td><input id="name" name="YOJ" placeholder="****" type="number" min="1950" max="2500" required></td></br></br></br>
</tr><tr><td>Username</td><td> <input id="name" name="username" placeholder="username" type="text" required></td></br></br>
</tr><tr><td>Password</td><td> <input id="password" name="password" placeholder="****************" type="password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}"></td></br></br></br>
</tr><tr><td>Re-enter Password</td><td><input id="password" name="repassword" placeholder="****************" type="password" required pattern="[(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}$"></td></br></br></br>
</tr><tr><td>Password-Hint</td>
 <td><input id="name" name="hint" placeholder="Enter Your Hint" type="text" required></td></br>


</tr><tr><td><a href="termsandconditions.php">Terms And Conditions</a></td>
<td><input type="radio" name="terms" value="Accept" required>Accept</option></td></br></br>
 <tr><td><input name="submit" type="submit" value=" Register "></td></tr>
</div>
</p>
<tr><span><?php echo $error; ?></span>
</br><span color:red><?php echo $error; ?></span>
</form>
</div>
</div>
</center>

<!-- javascript at the bottom for fast page loading -->
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/jquery.easing-sooper.js"></script>
  <script type="text/javascript" src="js/jquery.sooperfish.js"></script>
  <script type="text/javascript" src="js/jquery.kwicks-1.5.1.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $('#images').kwicks({
        max : 600,
        spacing : 2
      });
      $('ul.sf-menu').sooperfish();
    });
  </script>
</body>
</html>
