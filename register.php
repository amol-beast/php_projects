<?php
require "db.php";
if(isset($_GET["id"]))
	{
		$applied=1;
		$id=$_GET["id"];
		$statement1="select * from $dbname.$admin_job_postings where id='$id'";
		$result=mysqli_query($con,$statement1);
		$row = mysqli_fetch_array($result);
		echo "applied";
	}
if(!isset($applied))
	$applied=0;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>HR Extension - Counlting, recruitment, Corporate Events & Education</title>
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

<div id="templatemo_wrapper">
	<div id="templatemo_header">
    	<div id="site_title"><a rel="nofollow" href="http://www.hrextension.com">HR Extension</a></div>
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
				<li><a href="register.php" class="selected">Register</a></li>
				<li><a href="client.html">Clients</a></li>
                <li><a href="career.php">Career</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
            <br style="clear: left" />
        </div> <!-- end of templatemo_menu -->
    </div> <!-- END of header -->
    
    <div id="templatemo_page_intro">
    	<h1>Registration</h1>
        <p>Please Submit your resume with us. We will get back to you once we get the exact suitable match for you. </p>
    </div>
    
    <div id="templatemo_main">
    	<div id="contact_form">
    	<div class="col_32 left">
            
                <h2>Registration Form</h2>
                <form method="post" name="register" action="thanks.php" enctype="multipart/form-data">
                
                <div class="col_3 left">                
                    <label for="fullname">Name:</label> 
                    <input name="fullname" type="text" class="input_field" id="fullname" maxlength="30" />
                    
                  	<label for="email">Email:</label> 
               	  <input name="email" type="text" class="input_field" id="email" maxlength="30" />
                    
                   <label for="mobile">Mobile Number:</label> 
               	  <input name="mobile" type="text" class="input_field" id="mobile" maxlength="30" />                   
				   
				   <label for="subject">Subject:</label> 
                   
                    
					<?php if ($applied==1)
							{
								$heading=$row["heading"];
								
								echo '<input name="subject" type="text" class="input_field" id="subject" maxlength="30" value="'. $heading .'" readonly/>';
							}
							else
							{
								?>
                     <input name="subject" type="text" class="input_field" id="subject" maxlength="30" />
                                <?php
																
							}
					?> 
				</div>
                
                <div class="col_3 right">
                    <label for="message">Upload Resume:</label> 
                     <input name="resume" type="file" class="input_field" id="resume" maxlength="30" />

					<label for="experience">Experience:</label> 
               	  <input name="experience" type="text" class="input_field" id="experience" maxlength="30" />
				  <label for="location">Location:</label> 
                  <?php
				  if($applied==1)
				  	{ $location=$row["location"];
					  echo '<input name="location" type="text" class="input_field" id="location" maxlength="30" value="'.$location .'"/>';	
					}
				  else
				   { ?>
				  	<input name="location" type="text" class="input_field" id="location" maxlength="30" />	
                   <?php }
				  if($applied==1) 
				  	{
						?>
                        <label for="functional area">Functional Area:</label> 
               	  		<input name="functional_area" type="text" class="input_field" id="experience" maxlength="30" value="<?php echo $row["industry"];?>"/>
                        <?php
					}
				  else
				  	{
               	  ?>
				 <label for="email">Functional Area:</label> 
                    <select name="functional_area" onchange="showfield(this.options[this.selectedIndex].value)" class="input_field">
						  <option value="Information Technology">Information Technology</option>
						  <option value="Manufacturing">Manufacturing</option>
                      	  <option value="Hospitality">Hospitality</option>
                          <option value="Financial Services">Financial Services</option>
                          <option value="Insurance Sector">Insurance Sector</option>
                       	  <option value="Hospitality">Hospitality</option>
                          <option value="Telecom">Telecom</option>
                          <option value="Sales">Sales</option>
                          <option value="Business Development">Business Development</option>
						  <option value="Others">Others</option>
					</select>
					<?php 
					}
					?>
                       <div id="hid1">
                       </div>
                
                                        <input type="hidden" name="register" value="wut"/>
				</div>
                       
				
                
                <div class="clear"></div>
                 	<input type="submit" name="Submit" value="Submit" class="submit_btn" />
                 
                </form>
            </div>    
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
                <h3>South Africa Office:</h3>
                840-850 Donec vitae dui nisi,<br />
                Duis gravida, Vestibulum, 10990<br />
                Pellentesque et fermentum<br /><br />
                
                Tel: 080-010-1100<br />
                Fax: 080-010-2200 
			</div>
      </div>
        
      <div class="clear"></div>
      
                      
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
</html><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
</body>
</html>