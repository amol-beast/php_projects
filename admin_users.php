<?php
require "db.php";
//print_r($_SESSION);
if( (isset($_SESSION['usertype'])) && $_SESSION['usertype']=="admin") {
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['users_pressed']))
{
	echo "users pressed\n";
	header("Location: http://localhost/he7/HR%20Extension/admin_users.php");
	
}
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['job_postings_pressed']))
{
	echo "job_postings pressed\n";
	header("Location: http://localhost/he7/HR%20Extension/admin_job_postings.php");
	
}
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['placements_pressed']))
{
	echo "placements pressed\n";
	header("Location: http://localhost/he7/HR%20Extension/admin_placements.php");
	
}
function test_input($data)
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}



?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>HR Extension - Consulting, Recruitment, Corporate Events & Education</title>
<meta name="keywords" content="runner, free template, CSS, HTML" />
<meta name="description" content="Runner, Contact Form, free website template by templatemo.com" />
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" href="css/orman.css" type="text/css" media="screen" />
<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />	

<link rel="stylesheet" type="text/css" href="css/ddsmoothmenu.css" />

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/ddsmoothmenu.js">

/***********************************************
* Smooth Navigational Menu- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
***********************************************/

</script>
<script type="text/javascript">
function showfield(name){
  if(name=='Others'){ var cus = document.getElementById('hid1').innerHTML='Others: <input type="text" name="Others" />';}
  //else document.getElementById('col_3').innerHTML='';
}
</script>

<script type="text/javascript">

ddsmoothmenu.init({
	mainmenuid: "templatemo_menu", //menu DIV id
	orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
	classname: 'ddsmoothmenu', //class added to menu's outer DIV
	//customtheme: ["#1c5a80", "#18374a"],
	contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})

</script>

<link rel="stylesheet" href="css/slimbox2.css" type="text/css" media="screen" /> 
<script type="text/JavaScript" src="js/slimbox2.js"></script> 
	<script type="text/javascript" src="./js/jquery.js"></script>
	<script type="text/javascript" src="./js/jquery.query-2.1.7.js"></script>
	<script type="text/javascript" src="./js/rainbows.js"></script>
	<!-- // Load Javascipt -->

	<!-- Load stylesheets -->
	<link type="text/css" rel="stylesheet" href="css/style.css" media="screen" />
	<!-- // Load stylesheets -->
	
<script>


	$(document).ready(function(){
 
	$("#submit1").hover(
	function() {
	$(this).animate({"opacity": "0"}, "slow");
	},
	function() {
	$(this).animate({"opacity": "1"}, "slow");
	});
 	});


</script>
	

</head>
<body id="subpage">


<div id="templatemo_wrapper">
	<div id="templatemo_header">
    	<div id="site_title"><a rel="nofollow" href="http://www.hrextension.in">HR Extension</a></div>
        <div id="templatemo_menu" class="ddsmoothmenu">
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="about.html">About</a>
                   
                </li>
                <li><a href="#">Services</a>
                  <ul>
                       <li><a href="Recruitment.html">Recruitment</a></li>
						<li><a href="hr.html">HR Service</a></li>
						<li><a href="Training.html">Training</a></li>
						<li><a href="Education.html">Education</a></li>
                        <li><a href="Events.html">Corporate Events</a></li>
                     
                  </ul>  
                </li>
				<li><a href="register.php">Register</a></li>
				<li><a href="client.html">Clients</a></li>
                <li><a href="career.php">Career</a></li>
                <li><a href="contact.php"class="selected">Contact</a></li>
            </ul>
            <br style="clear: left" />
        </div> <!-- end of templatemo_menu -->
    </div> <!-- END of header -->
    
    <div id="templatemo_page_intro">
    	<h1>My Account</h1>

    </div>
    <form action="admin_index.php" class="login" method="post" name="users">
    <input type="hidden" name="users_pressed" value="yu" />
    <input id="shiny" name="users" type="submit" value="Users" /><br /><br /> <!--the text in the quotes after value will appear on the button-->
    </form>
    <form action="admin_index.php" class="login" method="post" name="users">
    <input type="hidden" name="job_postings_pressed" value="yu" />
    <input id="shiny" name="job_postings" type="submit" value="Job Postings" /><br /><br />
    </form>
    <form action="admin_index.php" class="login" method="post" name="users">
    <input type="hidden" name="placements_pressed" value="yu" />
    <input id="shiny" name="placements" type="submit" value="Placements" /> <!--the text in the quotes after value will appear on the button-->
    </form>
    </div> <!--the text in the quotes after value will appear on the button-->

	<div class="col_3 right">
			<h2>Our Offices</h2>
			<div class="sidebar_section">
                <h3>Bangalore Office</h3>
                # 567, 1st floor, 14th cross,<br />
                25th main, J.P Nagar 1st phase,<br />
                Bangalore - 560078<br /><br />
                
                Tel: 090-010-4400<br />
                Fax: 090-010-6600<br /><br />
                
              
			</div>
            <div class="sidebar_section">
                <h3> Africa Office:</h3>
                840-850 Donec vitae dui nisi,<br />
                Duis gravida, Vestibulum, 10990<br />
                Pellentesque et fermentum<br /><br />
                
                Tel: 080-010-1100<br />
                Fax: 080-010-2200 
			</div>
      </div>
        
      <div class="clear"></div>
      
      <iframe width="960" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=14th+Cross+Rd,+Jeewan+Sathi+Colony,+Phase+1,+J+P+Nagar&amp;aq=&amp;sll=12.9068445,77.5849538&amp;output=embed"></iframe><br /><small><a href="#" style="color:#0000FF;text-align:left">View Larger Map</a></small>
                
    </div> <!-- END of main -->
</div> <!-- END of wrapper -->

<div id="templatemo_bottom_wrapper">
	<div id="templatemo_bottom">
    	
        <div class="col col_3">
            <h4>Photo Gallery</h4>
            <ul class="nobullet footer_gallery">
                <li><a href="images/portfolio/02.jpg" rel="lightbox[gallery]"><img src="images/templatemo_image_02.png" alt="image 2" /></a></li>
                <li><a href="images/portfolio/03.jpg" rel="lightbox[gallery]"><img src="images/templatemo_image_03.png" alt="image 3" /></a></li>
                <li><a href="images/portfolio/04.jpg" rel="lightbox[gallery]"><img src="images/templatemo_image_04.png" alt="image 4" /></a></li>
                <li><a href="images/portfolio/05.jpg" rel="lightbox[gallery]"><img src="images/templatemo_image_05.png" alt="image 5" /></a></li>
                <li><a href="images/portfolio/03.jpg" rel="lightbox[gallery]"><img src="images/templatemo_image_06.png" alt="image 6" /></a></li>
                <li><a href="images/portfolio/01.jpg" rel="lightbox[gallery]"><img src="images/templatemo_image_07.png" alt="image 7" /></a></li>
            </ul>
            <div class="clear"></div>
            <a href="portfolio.html" class="more">View all</a>
        </div>
    	
        <div class="col col_3">
        	<h4>Twitter</h4>
      		<ul class="nobullet twitter">
                <li><a href="#">@templatemo</a> Proin turpis nisi, placerat quis orci ac, tempor iaculis eros.</li>
                <li>Suspendisse enean <a href="#">#FREE</a> website template, mi lacus gravida nisi, vitae commodo orci nisi non nulla.</li>
                <li>Sed non varius lorem, in sollicitudin lectus. Cras vel urna a urna gravida consequat. Curabitur non risus dui. <a rel="nofollow" href="http://bit.ly/13IwZO">http://bit.ly/13IwZO</a></li>
                <li><a href="http://fr.hiresimage.com" title="images" class="rower"  target="_blank">images</a></li>
            </ul>
        </div>
        <div>
        </div>
        <div class="col col_3 no_mr">
        	<h4>Follow Us</h4>
            <ul class="nobullet social">
            	<li><a rel="nofollow" href="https://www.facebook.com/hrextension" class="facebook">Facebook</a></li>
                <li><a href="#" class="twitter">Twitter</a></li>
                <li><a href="#" class="youtube">Youtube</a></li>
                <li><a href="#" class="google">Google+</a></li>
                <li><a href="#" class="vimeo">Linkedin</a></li>
                <li><a href="#" class="skype">Skype</a></li>
            </ul>
        </div>
        
        <div class="clear"></div>
    </div> <!-- END of bottom -->
    
</div> <!-- END of bottom wrapper -->

<div id="templatemo_footer_wrapper">
	<div id="templatemo_footer">
    	Copyright © 2014 HR Extension <a rel="nofollow" href="#" target="_parent"></a>
		
    </div> <!-- END of footer -->
</div> <!-- END of footer wrapper -->

</body>
<script type='text/javascript' src='js/logging.js'></script>
</html>
    


<?php
}
else 
{
	echo "else";
	header('Location:http://localhost/he7/HR%20Extension/admin_login.php');
}
?>