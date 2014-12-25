  <?php
  require "db.php";
  //$debug=1;
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
  <title>HR Extension - Counlting, recruitment, Corporate Events & Education</title>
  <meta name="keywords" content="runner, blog posts, free template, CSS, HTML" />
  <meta name="description" content="Runner, Blog Posts, free blog template by templatemo.com" />
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
		  <div id=" " class="ddsmoothmenu">
			  <ul>
				  <li><a href="index.html">Home</a></li>
				  <li><a href="about.html">About</a>
					 
				  </li>
				  <li><a href="#">Services</a>
					<ul>
						  <li><a href="Training.html">Training</a></li>
						  <li><a href="Recruitment.html">Recruitment</a></li>
						  <li><a href="Events.html">Corporate Events</a></li>
						  <li><a href="Education.html">Education</a></li>
					   
					</ul>  
				  </li>
				  <li><a href="register.php" >Register</a></li>
				  <li><a href="client.html">Clients</a></li>
				  <li><a href="career.php"class="selected">Career</a></li>
				  <li><a href="contact.php">Contact</a></li>
			  </ul>
				  <br style="clear: left" />
		  </div> <!-- end of templatemo_menu -->
	  </div> <!-- END of header -->
	  
	  <div id="templatemo_page_intro">
		  <h1>Hot Openings</h1>
		  <p>Pellentesque rhoncus placerat eros, et imperdiet diam sagittis semper. Curabitur purus quam, rutrum eget ante ut, accumsan gravida odio.</p>
	  </div>
	  
	  
		<div id="templatemo_main">
			<div id="templatemo_content" class="left">
			<?php
				$total_per_pages=4; 
				if(isset($_GET['page']))
					{
						$page=test_input(($_GET['page']));
						$start=($page-1)*$total_per_pages ;
					}
				else
					{
						$page=1;
						$start=0;
						
					}
				if(isset($_GET['industry']))
					{   
					$industry=test_input($_GET['industry']);
					if($debug==1)
						echo "industry:".$industry;
	
		
					$statement2="select * from $dbname.$admin_job_postings where industry='$industry'";
					$result=mysqli_query($con,$statement2);
					$num_results= mysqli_num_rows($result);
					$num_page=ceil($num_results/$total_per_pages);
					if ($debug==1)
						{
							echo $statement2;
							echo "num_results:".$num_results." num_page=".$num_page;
						}
					if(1)//$start!=0) 
					{$statement1="select * from $dbname.$admin_job_postings where industry='$industry' order by last_date desc limit $start,$total_per_pages"; }
					else
					{$statement1="select * from $dbname.$admin_job_postings where industry='$industry order by last_date desc'";}
					
					
					$result=mysqli_query($con,$statement1);
					//$row = mysqli_fetch_array($result);
					$num= mysqli_num_rows($result);
					if ($debug==1)
						{
							echo $statement1;
							echo "num_results:".$num_results." num_page=".$num_page. "num=".$num ;
						}
					}
				else
				{
					$statement2="select * from $dbname.$admin_job_postings ";// where industry='$industry'";
					$result=mysqli_query($con,$statement2);
					$num_results= mysqli_num_rows($result);
					$num_page=ceil($num_results/$total_per_pages);
					
					if ($debug==1)
						{
							echo $statement2;
							echo "num_results:".$num_results." num_page=".$num_page;
						}
					if(1)//$start!=0) 
					{	$statement1="select * from $dbname.$admin_job_postings order by last_date desc limit $start,$total_per_pages";}
					else
					{
						$statement1="select * from $dbname.$admin_job_postings order by last_date desc ";// where industry='$industry'";
					}
					if($debug==1)
						echo $statement1;
					$result=mysqli_query($con,$statement1);
					//$row = mysqli_fetch_array($result);
					$num= mysqli_num_rows($result); 
				if ($debug==1)
						{
							echo $statement1;
							echo "num_results:".$num_results." num_page=".$num_page;
						}
				}
				
	
		
			if($num_results!=0) 
			while ($row = mysqli_fetch_array($result)) 
					{
				
			?>
				<div class="post-item">
					<div class="post-meta">
						
						<div class="post-meta-content">
							<h2><?php echo $row["heading"];?></h2>
							Location: <span><a href="#"><?php echo $row["location"];?></a></span>
							Last Date of Apply:<span><a href="#"><?php echo $row["last_date"]; ?></a></span>
							</div>
						
						
						<div class="clear"></div>
					</div>
					
					<p><?php echo $row["description"]; ?></p>
					<a class="more" action="submit" href="register.php?id=<?php echo $row["id"];?>">Apply</a>
				</div>
	<?php 
			}
		
	if ($num!=0) { ?>       
				<div class="templatemo_paging">
					<ul>
					<?php
					if (isset($_GET["industry"]))
						$industry_link_path='&industry='.$industry;
					else
						$industry_link_path="";
					if($page==1)
						echo '<li><a rel="nofollow" href="career.php?page='. 1 .$industry_link_path. '" target="_parent">Previous</a></li>';
					else
						echo '<li><a rel="nofollow" href="career.php?page="'.$page .$industry_link_path.'" target="_parent">Previous</a></li>';
					for($i=1;$i<=$num_page;$i++)
					 {
						echo '<li><a rel="nofollow" href="career.php?page='.$i.$industry_link_path. '" target="_parent">'.$i.'</a></li>';
					 }
	
					if($page==$num_page)
						echo '<li><a rel="nofollow" href="career.php?page='. $num_page . $industry_link_path.'" target="_parent">Next</a></li>';
					else
						echo '<li><a rel="nofollow" href="career.php?page="'.$page .$industry_link_path.'" target="_parent">Next</a></li>';
					?>
						
						
					</ul>
					<div class="clear"></div>
				</div>
				<?php } ?>
			</div> <!-- END of content -->
					
			<div id="templatemo_sidebar" class="right">
				
				<div class="sidebar_section sidebar_section_bg">
					<h3>Industry</h3>
					<ul class="sidebar_link_list">
						<?php 
						$statement7="select * from $dbname.$admin_industry ";
						$result=mysqli_query($con,$statement7);
						while($row=mysqli_fetch_array($result))
							{
								if(isset ($_GET["industry"]))
								{	if($industry==$row["industry"])
										echo '<li id="industry_select"><a id="industry_select" href="career.php?industry='.$row["industry"].'">'.$row["industry"].'</a></li>';		else
										echo '<li><a href="career.php?industry='.$row["industry"].'">'.$row["industry"].'</a></li>';
								}
								else
									echo '<li><a href="career.php?industry='.$row["industry"].'">'.$row["industry"].'</a></li>';
							}
						?>
					</ul>
				</div>
				<!--
				<div class="sidebar_section sidebar_section_bg">
					<h3>Recent Placements</h3>
					<ul class="sidebar_link_list comment">
						<li>
							<span>Donec rhoncus, neque quis dapibus dapibus, lorem tortor semper est...</span>
							<span class="comment_meta">
								<strong>Van</strong> on <a href="#">Quisque dolor dolor</a>
							</span>
						</li>
						<li>
							<span>Donec rhoncus, neque quis dapibus dapibus, lorem tortor semper est...</span>
							<span class="comment_meta">
								<strong>George</strong> on <a href="#">Curabitur Mollis Justo</a>
							</span>
						</li>
						<li>
							<span>Donec rhoncus, neque quis dapibus dapibus, lorem tortor semper est...</span>
							<span class="comment_meta">
								<strong>Walker</strong> on <a href="#">Praesent venenatis ante neque</a>
							</span>
						</li>
						<li>
							<span>Donec rhoncus, neque quis dapibus dapibus, lorem tortor semper est...</span>
							<span class="comment_meta">
								<strong>David</strong> on <a href="#">Etiam dictum pulvinar neque</a>
							</span>
						</li>
						
					</ul>
				</div>
				-->
				
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
				  <li><a href="http://www.azimage.com" title="Image" class="rower"  target="_blank">Image</a></li>
			  </ul>
		  </div>
		  
		  <div class="col col_3 no_mr">
			  <h4>Follow Us</h4>
			  <ul class="nobullet social">
				  <li><a rel="nofollow" href="#" class="facebook">Facebook</a></li>
				  <li><a href="#" class="twitter">Twitter</a></li>
				  <li><a href="#" class="youtube">Youtube</a></li>
				  <li><a href="#" class="google">Google+</a></li>
				  <li><a href="#" class="vimeo">Vimeo</a></li>
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