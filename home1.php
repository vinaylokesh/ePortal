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
    <div id="site_content">
      <ul id="images">
        <li><img src="images/1.jpg" width="600" height="300" alt="gallery_buildings_one" /></li>
        <li><img src="images/2.jpg" width="600" height="300" alt="gallery_buildings_two" /></li>
        <li><img src="images/3.jpg" width="600" height="300" alt="gallery_buildings_three" /></li>
        <li><img src="images/4.jpg" width="600" height="300" alt="gallery_buildings_four" /></li>
        <li><img src="images/5.jpg" width="600" height="300" alt="gallery_buildings_five" /></li>
        <li><img src="images/6.jpg" width="600" height="300" alt="gallery_buildings_six" /></li>
      </ul>
     <!-- <div id="sidebar_container">
        <div class="sidebar">
          <h3>Latest News</h3>
          <h4>New Website Launched</h4>
          <h5>MAy 1st, 2015</h5>
          <p>2015 sees the redesign of our website. Take a look around and let us know what you think.<br /></p>
      </div>
    </div>
          <h5>June 1st, 2015</h5>
         
      </div>-->
      <div id="sidebar_container">
        <h1>Organistion e-Portal</h1>
        <p>This Website Helps for organisations.</p>
        <p> User Login</p>
	<p>Resource Sharing</p>
	<p>Statistics about the department.</p>
	<p>Achievements.</p>
	<p>News and notifications.</p>
	<p>Related articles.</p> 
 <footer>
      <p>Copyright &copy; e Portal | <a href="http://fotogrph.com/">Images</a> | <a href="http://www.eportal.co.in">design from e-portal.com</a></p>
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
