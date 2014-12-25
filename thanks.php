  <?php
  require "db.php";
  $debug=1;
  //require_once('phpmailer/class.phpmailer.php');
  if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['contact']))
  {
  //echo "contact";
	  $name = test_input($_POST["fullname"]);
	$email = test_input($_POST["email"]);
	$subject = test_input($_POST["subject"]);
	$category = test_input($_POST["category"]);
	if ($category=="Others")
		$others = test_input($_POST["Others"]);
	else
		$others=NUll;
	$message = test_input($_POST["message"]);
	$hidden = test_input($_POST["hidden"]);
	//echo "Name".$name." ".$email." ".$subject." ".$category." ".$others." ".$message." ".$hidden;
	
  
  }
  if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['register']))
  {
  
  
  //  echo "register";
	$name = test_input($_POST["fullname"]);
	$email = test_input($_POST["email"]);
	$mobile = test_input($_POST["mobile"]);
	$subject = test_input($_POST["subject"]);
	$experience = test_input($_POST["experience"]);
	$location = test_input($_POST["location"]);
	$industry = test_input($_POST["functional_area"]);
	if ($industry=="Others")
		  $others = test_input($_POST["Others"]);
	$hidden = test_input($_POST["register"]);
	if($debug==1)
		echo "Name".$name." ".$email." ".$mobile." ".$subject." ".$industry."  ".$hidden;
  
  
	
  }
  
  function test_input($data)
  {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
  }
  
  $allowedExts = array("pdf", "docx");
  try {
	  if ($_FILES["resume"]["error"] > 0) {
	$errors=1;
	if($debug==1)
		echo "Error: " . $_FILES["resume"]["error"] . "<br>";
  } 
  else {
	  if($debug==1) {
	echo "Upload: " . $_FILES["resume"]["name"] . "<br>";
	echo "Type: " . $_FILES["resume"]["type"] . "<br>";
	echo "Size: " . ($_FILES["resume"]["size"] / 1024) . " kB<br>";
	echo "Stored in: " . $_FILES["resume"]["tmp_name"]; }
  }
  
	  //print_r($_FILES);    
	  // Undefined | Multiple Files | $_FILES Corruption Attack
	  // If this request falls under any of them, treat it invalid.
	  if (
		  !isset($_FILES['resume']['error']) ||
		  is_array($_FILES['resume']['error'])
	  ) {
		  throw new RuntimeException('Invalid parameters.');
	  }
  
	  // Check $_FILES['resume']['error'] value.
	  switch ($_FILES['resume']['error']) {
		  case UPLOAD_ERR_OK:
			  break;
		  case UPLOAD_ERR_NO_FILE:
			  throw new RuntimeException('No file sent.');
		  case UPLOAD_ERR_INI_SIZE:
		  case UPLOAD_ERR_FORM_SIZE:
			  throw new RuntimeException('Exceeded filesize limit.');
		  default:
			  throw new RuntimeException('Unknown errors.');
	  }
  
	  // You should also check filesize here. 
	  if ($_FILES['resume']['size'] > 1000000) {
		  throw new RuntimeException('Exceeded filesize limit.');
	  }
  
	  // DO NOT TRUST $_FILES['resume']['mime'] VALUE !!
	  // Check MIME Type by yourself.
  
  
	  // You should name it uniquely.
	  // DO NOT USE $_FILES['resume']['name'] WITHOUT ANY VALIDATION !!
	  // On this example, obtain safe unique name from its binary data.
  
	  $move_path=sprintf('uploads/%s.%s',sha1_file($_FILES['resume']['tmp_name']),$_FILES['resume']['name']);
	  echo "move:".$move_path;
	  if (!move_uploaded_file($_FILES['resume']['tmp_name'],$move_path)) {
		  throw new RuntimeException('Failed to move uploaded file.');
	  }
	  
	  echo "Operating System: ".PHP_OS;
		  echo "#################".str_replace("/","\\",$move_path);
	  $p=str_replace("/","\\",$move_path);
	  if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') 
		  {
			  $full_path=getcwd().'\\'.$p;
		  }
	  else 
		  {
			  $full_path=getcwd().'/'.$move_path;
		  }
  
	  echo $full_path;	
	  $path=$_FILES['resume']['tmp_name'];
	  echo 'File is uploaded successfully.';
	  
  //(include_once 'Mail.php') or die("oops");;
  //require_once "Mail.php";
  echo "came here";
  include "Mail.php" or die ("ga");
  echo "came here7777";
  
$recipients = 'joe@example.com';

$headers['From']    = 'test_info@hrextension.in';
$headers['To']      = 'amol7735.77@gmail.com';
$headers['Subject'] = 'Test message';

$body = 'Test message';

$params['sendmail_path'] = '/usr/lib/sendmail';

// Create the mail object using the Mail::factory method
try {
//$mail_object =&
Mail::factory('sendmail', $params)->send($recipients, $headers, $body);
echo "fdggfd";

//$p= $mail_object->send($recipients, $headers, $body);
}
catch (Exception $e)
{
	 echo $e->getMessage();
}
echo "mail sent";
  $from = "test_info@hrextension.in";
  $sendmail_path="/usr/sbin/sendmail";
  $to = "amol7735.77@gmail.com";
  $subject = "subject";
  $body = "";
  
  $host = "smtp.hrextension.in";
  $username = "test_info";
  $password = "nitai";
  
  $headers = array ('From' => $from,
		'To' => $to,
		'Subject' => $subject);
  
  /*$smtp = Mail::factory( 'smtp', array('host' => $host,
			'auth' => true,
			'username' => $username,
			'password' => $password ) );
  
  $mail = $smtp->send( $to, $headers, $body );
  
  if ( @PEAR::isError($mail) ) {
  echo( "<p>" . $mail->getMessage() . "</p>" );
  } else {
  echo( "<p>Message successfully sent!</p>" );
  }
  */
  } 
  catch (RuntimeException $e) {
  
	  if($debug==1) {
		  echo $e->getMessage();
		  $error_message=$e->getMessage();
			  }
  
  }
  
  //$temp = explode(".", $_FILES["resume"]["name"]);
  //$extension = end($temp);
  
  //echo $_FILES["file"]["name"];
  
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
  
  </head>
  <body id="subpage">
  <?php 
  ?>
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
		  <h1>Thank You</h1>
		  <p>Your form has been submitted. You will shortly hear from us.</p>
	  </div>
	  
				  
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