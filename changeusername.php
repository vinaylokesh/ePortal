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
          <h1><a href="home1.html">e<span class="logo_colour">-Portal</span></a></h1>
          <h2>Organisation e-Portal.</h2>
        </div>
      </div>
      <nav>
        <ul class="sf-menu" id="nav">
          <li class="selected"><a href="home1.html">Home</a></li>
        
          
          
          <li><a href="#">Notifications</a>
  		<ul>

		<li><a href="schedule.php">Schedule</a></li>	
		 <li><a href="events.php">Events</a></li>		
		  
		<li><a href="placementnews.php">Placement News</a></li>	
		<li><a href="others.php">Miscellaneous</a></li>	
			
	      </ul>
	</li>
          <li><a href="#">Resources</a>
            <ul>
       
              <li><a href="#">Downloads</a>
                <ul>
                  
                 	<li><a href="download.php">Text Books</a></li>	
		 <li><a href="download1.php">Notes </a></li>
		<li><a href="download2.php">Others </a><li>
                 
                </ul>
              </li>
            
            </ul>
          </li>

  <li><a href="#">Gallery</a>
<ul>  
     
  <li><a href="#">Achievements</a>
<ul> 
 <li><a href="gallery1.php">Submit</a>
  <li><a href="search.php">View</a>
</ul>
  <li><a href="#">Paintings</a>
<ul> 
 <li><a href="pantings1.php">Submit</a>
  <li><a href="paintsearch1.php">View</a>
</ul>
</ul>
</li>

  <li><a href="#">Articles</a>
            <ul>       
  <li><a href="Articles.php">Submit Articles</a>
  <li><a href="readArticles.php">Read Articles</a>
</ul>
</li>

<li><a href="#">Help</a>
 <ul>
<li><a href="contact.php">Contact Us</a>
</ul>
</li>



 <li><a href="#">Account Settings</a>
            <ul>
		<li><a href="changepassword.php">Change Password</a></li>	
		 <li><a href="changeusername.php">Change UserName</a></li>
			 <li><a href="Deactivate.php">Deactivate</a></li>		
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
	if(empty($_POST['password']) || empty($_POST['newusername']) || empty($_POST['confirmusername']) || empty($_POST['username']))
	{
		echo "Please Enter All the Details\n\n";
	}
	else
	{
	      $username=$_POST['username'];
       	      $password=$_POST['password'];
	      $newusername=$_POST['newusername'];
	      $confirmusername=$_POST['confirmusername'];  
		$sql="select * from register where username='$username'";
		$query = mysql_query($sql) or die(mysql_error());
		$res=mysql_fetch_array($query,$connection);
		$tableusername=$res['username'];
		$tablepassword=$res['password'];
		if($newusername==$confirmusername && $password==$tablepassword && $username==$tableusername)
		{
		$sql1="update register set username='$confirmusername' where username='$username'";
	        mysql_query($sql1) or die(mysql_error());
		echo "Username Changed Succesfully";		
		} 
		else
		{
			echo"Password Mismatch or User does not exist";
		}
	// mysql_close($connection);	
        }
}
?>


<form action="changeusername.php" method="post">
Username <input id="name" name="username" placeholder="username" type="text"></br>
Password <input id="password" name="password" placeholder="****************" type="password"></br>
New Username<input id="name" name="newusername" type="text"></br>
Confirm Username<input id="name" name="confirmusername"  type="text"></br>
<input name="submit" type="submit" value=" Change Username ">

<span></span>
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








