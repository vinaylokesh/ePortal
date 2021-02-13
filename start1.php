<?php
session_start();
include('login.php'); // Includes Login Script
if(isset($_SESSION['login_user'])){
header("location: home1.php");
}
?>

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
<div id="main">
<h1><h1>
<div id="login">
<h3>Login </h3>
<form action="" method="post">
<label>Email</label><input id="name" name="email" placeholder="email" type="text" width="20px"></br>
<label>Password</label>
<input id="password" name="password" placeholder="**********" type="password"></br>
<input name="submit" type="submit" value=" Login "></br>
<a href="register.php">Not yet registered?</a></br>

<a href="forgotpassword.php">Forgot Password?</a>
</br><span color:red><?php echo $error; ?></span>
</form>
</div>
</div>
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

