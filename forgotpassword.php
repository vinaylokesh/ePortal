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
mysql_connect("localhost", "root", "123"); 
mysql_select_db('company') or die(mysql_error());		
if(isset($_POST['submit']))
   {
	if(empty($_POST['passwordhint']) || empty($_POST['newpassword']) || empty($_POST['USN']) || empty($_POST['confirmpassword']) || empty($_POST['username']))
	{
		echo "Please Enter All the Details\n\n";
	}
	else
	{
	      $USN=$_POST['USN'];
	      $username=$_POST['username'];
       	      $passwordhint=$_POST['passwordhint'];
	      $newpassword=$_POST['newpassword'];
	      $confirmpassword=$_POST['confirmpassword'];  
		$sql="select * from register where username='$username' AND USN='$USN'";
		$query = mysql_query($sql) or die(mysql_error());
		$res=mysql_fetch_array($query,$connection);
		$tableUSN=$res['USN'];
		$tablepasswordhint=$res['hint'];
		$tableusername=$res['username'];
		if($newpassword==$confirmpassword && $passwordhint==$tablepasswordhint && $tableUSN==$USN)
		{
		$sql1="update register set password='$confirmpassword' where username='$username'";
	        mysql_query($sql1) or die(mysql_error());
		echo "Password Changed Succesfully You Can now login";		
		} 
		else
		{
			echo"Password Mismatch or User does not exist";
		}
	// mysql_close($connection);	
        }
}
?>


<h3>Change Password </h3>
<form action="forgotpassword.php" method="post">
<table>
USN <input id="name" name="USN" placeholder="USN" type="text"></br>
Username <input id="name" name="username" placeholder="username" type="text"></br>
Password Hint <input id="name" name="passwordhint" placeholder="yourpasswordhinthere" type="text"></br>
New Password <input id="password" name="newpassword" placeholder="*************" type="password"></br>
Confirm Password<input id="password" name="confirmpassword" placeholder="****************" type="password"></br>
</table>
<input name="submit" type="submit" value=" Change Password ">
<span></span>
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




