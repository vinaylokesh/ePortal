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
  <div id="main">
    <header>
      <div id="logo">
        <div id="logo_text">
          <!-- class="logo_colour", allows you to change the colour of the text -->
          <h1><a href="home.html">e<span class="logo_colour">-Portal</span></a></h1>
          <h2>Organisation e-Portal.</h2>
        </div>
      </div>
      <nav>
        <ul class="sf-menu" id="nav">
          <li class="selected"><a href="home.html">Home</a></li>
          <li><a href="#">Notifications</a>
  		<ul>
<li><a href="writenotifications.php">Write Notifications</a></li>
		<li><a href="scheduleA.php">Schedule</a></li>	
		 <li><a href="eventsA.php">Events</a></li>		
		  
		<li><a href="placementnewsA.php">Placement News</a></li>	
		<li><a href="othersA.php">Miscellaneous</a></li>	
			
	      </ul>
	</li>
          <li><a href="#">Resources</a>
            <ul>
              <li><a href="#">Uploads</a>		
	   <ul>
                  
                 	<li><a href="upload.php">Text Books</a></li>	
		 <li><a href="upload1.php">Notes </a></li>
		<li><a href="upload2.php">Others </a><li>
                 
                </ul>
		</li>
              <li><a href="#">Downloads</a>
                <ul>
                  
                 	<li><a href="downloadA.php">Text Books</a></li>	
		 <li><a href="download1A.php">Notes </a></li>
		<li><a href="download2A.php">Others </a><li>
                 
                </ul>
              </li>
            
            </ul>
          </li>
  <li><a href="#">Gallery</a>
<ul>  
     
  <li><a href="#">Achievements</a>
<ul> 
 <li><a href="gallery.php">Insert</a>
  <li><a href="search1.php">View</a>
</ul>
  <li><a href="#">Paintings</a>
<ul> 
 <li><a href="pantings.php">Insert</a>
  <li><a href="paintsearch.php">View</a>
</ul>
</ul>
</li>
  <li><a href="#">Articles</a>
            <ul>       
  <li><a href="ArticlesAdmin.php">Write Articles</a>
  <li><a href="readArticlesA.php">Read Articles</a>
</ul>
</li>
<li><a href="#">Admin Console</a>
            <ul>       
  <li><a href="adminconsole.php">New Registration</a>
 
 <li><a href="#">Review Gallery</a>
<ul>
 <li><a href="revSearch.php">Achievements</a>

 <li><a href="reviewpaintings.php">Paintings</a>
</ul>
  <li><a href="reviewArticles.php">Review Articles</a>
  <li><a href="listusers.php">List Users</a>
<li><a href="feedback.php">Feed Back</a>
</ul>
</li>




 <li><a href="#">Account Settings</a>
            <ul>
		<li><a href="changepasswordA.php">Change Password</a></li>	
		 <li><a href="changeusernameA.php">Change UserName</a></li>
			 <li><a href="DeactivateA.php">Deactivate</a></li>		
		 <li><a href="logout.php">Logout</a></li> 
               
              </ul>
  </li>       

		
  
	
        </ul>
      </nav>
    </header>

<?php
mysql_connect("localhost", "root", "123"); 
mysql_select_db('company') or die(mysql_error());		
if(isset($_POST['submit']))
   {
	if(empty($_POST['password']) || empty($_POST['username']) || empty($_POST['USN']))
	{
		echo "Please Enter All the Details\n\n";
	}
	else
	{
	      $username=$_POST['username'];
       	      $password=$_POST['password'];
	    	 $USN=$_POST['USN'];
		$sql="select * from register where username='$username'";
		$query = mysql_query($sql) or die(mysql_error());
		$res=mysql_fetch_array($query,$connection);
		$tableUSN=$res['USN'];
		$tableusername=$res['username'];
		$tablepassword=$res['password'];
		if($password==$tablepassword && $username==$tableusername && $tableUSN==$USN)
		{
		$sql1="delete from register where username='$username' and USN='$USN'";
	        mysql_query($sql1) or die(mysql_error());
		echo "Account Deleted";	
		header("location: logout.php");	
		} 
		else
		{
			echo"Password Mismatch or User does not exist";
		}
	// mysql_close($connection);	
        }
}
?>

<h3>Deactivate Account </h3>
<form action="Deactivate.php" method="post">
USN <input id="name" name="USN" placeholder="USN" type="text"></br>
Username <input id="name" name="username" placeholder="username" type="text"></br>
Password <input id="password" name="password" placeholder="****************" type="password"></br>
<input name="submit" type="submit" value=" Deactivate ">
<span></span>
</form>
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




