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


<!-- 
//THIS PROGRAM WILL UPLOAD IMAGE AND WILL RETRIVE FROM DATABASE. 
(IF YOU HAVE ANY QUERY CONTACT:rahulpatel541@gmail.com)
-->
<!-- this form is user to store images-->
<form action="paintings.php" method="post"  enctype="multipart/form-data">
Enter the Name:<input type="text" name="image_name" id="" /><br />
Enter the Description:<input type="text" name="description" id="" /> <br />
<input name="image" id="image" accept="image/JPEG" type="file"><br /><br />
<input type="submit" value="submit" name="submit" />
</form>
<br /><br />
<!-- this form is user to display all the images-->
<form action="paintings.php" method="post"  enctype="multipart/form-data">
</form>



<?php
//THIS IS INDEX.PHP PAGE
//connect to database.db name is images
		mysql_connect("localhost", "root", "123") OR DIE (mysql_error());
		mysql_select_db ("company") OR DIE ("Unable to select db".mysql_error());
//to retrive send the page to another page
if(isset($_POST['retrive']))
{
	header("location:paintsearch.php");
	
}

//to upload
if(isset($_POST['submit']))
{
if(isset($_FILES['image'])) {
		$name=$_POST['image_name'];
		$email=$_POST['description'];
		$fp=addslashes(file_get_contents($_FILES['image']['tmp_name'])); //will store the image 
		}
				// our sql query
				$sql = "INSERT INTO paintings VALUES('null', '{$name}','{$description}','{$fp}');";
							mysql_query($sql) or die("Error in Query insert: " . mysql_error());
} 
?>

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
