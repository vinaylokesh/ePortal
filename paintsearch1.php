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
        <ul class="sf-menu" id="nav">
          <li class="selected"><a href="home1.html">Home</a></li>
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

  <li><a href="#">Achievements Gallery</a>
<ul>       
  <li><a href="gallery.php">Insert</a>
  <li><a href="search1.php">View</a>
</ul>
</li>
  <li><a href="#">Articles</a>
            <ul>       
  <li><a href="ArticlesAdmin.php">Write Articles</a>
  <li><a href="readArticlesA.php">Read Articles</a>
</ul>
</li><li><a href="#">Admin Console</a>
            <ul>       
  <li><a href="adminconsole.php">New Registration</a>
  <li><a href="revSearch.php">Review Gallery</a>
  <li><a href="reviewArticles.php">Review Articles</a>
  <li><a href="listusers.php">List Users</a>
<li><a href="feedback.php">Feed Back</a>
</ul>
</li>




 <li><a href="#">Settings</a>
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
	//connect to database.db name = images
		     mysql_connect("localhost", "root", "123") OR DIE (mysql_error());
		mysql_select_db ("company") OR DIE ("Unable to select db".mysql_error());
//display all the image present in the database

		$msg="";
		$sql="select * from paintings";
		if(mysql_query($sql))
		{
			$res=mysql_query($sql);
			while($row=mysql_fetch_array($res))
			{
			
			$id=$row['id'];					
			$image=$row['image'];
			$msg.='<div class="imgcontainer">';
			$msg.='<div class="img">';
 			$msg.=  '<a href="paintsearch.php?id='.$id.'"><img src="data:image/jpeg;base64,'.base64_encode($row['image']). ' " width="40%" height="60%" style="display:block;"/>	</a>'  ;
			$msg.='</div>';
			
			$msg.='<div class="desc">';

			

			$msg.=$row['name'];
			$msg.='</br>';
$msg.='</br>';
			$msg.=$row['description']; 

			$msg.='</div>';


			$msg.='</div>';
			}
		//echo $msg;
		}
		else
			$msg.="Query failed";
?>
<div>
<?php
echo $msg;
?>
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
