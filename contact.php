<?php
if(isset($_POST['submit']))
{
if (empty($_POST['your_name']) || empty($_POST['your_message']) || empty($_POST['your_email']))
 {
echo "Please Enter All the Details\n\n";
}
else
{
$conn = mysql_connect("localhost", "root", "123");
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}
$name=$_POST['your_name'];
$message=$_POST['your_message'];
$email=$_POST['your_email'];

$query ="insert into contactus(name,email,message) values('$name','$email','$message');";
mysql_select_db('company');
$retval = mysql_query( $query, $conn );
if(! $retval )
{
  die('Could not enter data: ' . mysql_error());
}
echo "Entered data successfully\n";
mysql_close($conn);
}
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
<body><h2 class="welcome">	Welcome <?php echo $username; ?></h2>
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
    </header>
    <div id="site_content">






<!----here-----############################################################################################--->  
<center>
<h3>Contact Us</h3>
<form action="ztempcontact.php" method="post">
       	    <p><span>Name          </span><input class="contact" type="text" name="your_name" required value="<?php echo $yourname; ?>" /></p>
            <p><span>Email         </span><input class="contact" type="email" name="your_email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" value="<?php echo $youremail; ?>" /></p>
            <p><span>Message   </span><textarea class="contact textarea" rows="5" cols="30" required name="your_message" ><?php echo $yourmessage; ?></textarea></p>
<input name="submit" type="submit" value=" Send "/>
<input name="reset"  type="reset"/><br/><br/> 


</form>
</center>
<!----here-----############################################################################################-->
    <footer>
      <p>Organization e-Portal-2015</p>
    </footer>


  </div>
  <p>&nbsp;</p>
  


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
