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
session_start();
$username=$_SESSION['login_user'];
if(isset($_POST['submit']))
{
$conn = mysql_connect("localhost", "root", "123");
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}


$type=$_POST['art'];

$name=$_SESSION['login_user'];
$article=$_POST['your_article'];

$query ="insert into articlesref(name,type,article) values('$name','$type','$article');";
mysql_select_db('company');
$retval = mysql_query( $query, $conn );
if(! $retval )
{
  die('Could not enter data: ' . mysql_error());
}
echo "Entered data successfully\n";
mysql_close($conn);

}
?>

<!DOCTYPE html>
<head>
<title>Articles</title>
</head>
<body onload="date()">
<center><h1><i>Welcome to Article Section</i><h1> </center>
</h3>
<form name="first" action="Articles.php" method="post">
 Select Type Of Article 
<input type="radio" name="art" value="Technical">Technical </t>
<input type="radio" name="art" value="Non-Technical">Non-Technical</br> <br/>
</i>
<script>
function date()
 {
document.first.date.value= Date();
}
function check()
{
var a=window.confirm("Are you sure to submit your article?");
if(a==true)
window.alert("Ok");
else
window.alert("Cancel");
}
</script>
	Date: <input type="text" name="date" disabled/> <br/> <br/>


       	  Name<input class="contact" type="text" name="your_name" value="<?php echo $username; ?>" disabled /> </br></br>
	 
	Your Article here </br>
          <textarea class="contact textarea" rows="40" cols="70" name="your_article" required><?php echo $yourmessage;?></textarea>
</br><input name="submit" type="submit" value=" Submit Your Article" onclick="check()">
<span></span>
</form>
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
