<?php
require "db.php";
//print_r($_SESSION);
if( (isset($_SESSION['usertype'])) && $_SESSION['usertype']=="admin") {
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
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <script type="text/javascript" src="js/form_init.js" id="form_init_script"
    data-name="">
    </script>
    <link rel="stylesheet" type="text/css" href="css/default7.css"
    id="theme" />
    <title>
    </title>
    <link href="templatemo_style.css" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="css/style8.css" type="text/css" media="all" charset="utf-8" />
		<link rel="stylesheet" href="css/MenuMatic.css" type="text/css" media="screen" charset="utf-8" />
<link rel="stylesheet" type="text/css" href="./css/style1.css">
<link rel="stylesheet" href="css/orman.css" type="text/css" media="screen" />
<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />	

<link rel="stylesheet" type="text/css" href="css/ddsmoothmenu.css" />

<script type="text/javascript" src="js/jquery.min.js"></script>
	<script src="http://www.google.com/jsapi"></script><script>google.load("mootools", "1.2.1");</script>	
	
	<!-- Load the MenuMatic Class -->
	<script src="js/MenuMatic_0.68.3.js" type="text/javascript" charset="utf-8"></script>
	
	<!-- Create a MenuMatic Instance -->
	<script type="text/javascript" >
		window.addEvent('domready', function() {			
			var myMenu = new MenuMatic({ orientation:'vertical' });			
		});		
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
<style type="text/css"> 

#menu li:focus > ul {
    display:block;
}
li {
    outline: 0; 
}</style>
  </head>


<body id="subpage">
<div id="greet1">
Hi <?php echo $_SESSION["username"];?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="admin_login.php?logout=1"><u>Log Out</u></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</div>
<style>#docContainer .fb_cond_applied{ display:none; }</style><noscript><style>#docContainer .fb_cond_applied{ display:inline-block; }</style></noscript>
<div id="templatemo_wrapper">
	<div id="templatemo_header">
    	<div id="site_title"><a rel="nofollow" href="http://www.hrextension.in">HR Extension</a></div>
    </div> <!-- END of header -->
    
    <div id="templatemo_page_intro">
    	<h1>Only for Administrators</h1>

    </div>
<div id="left_menu">
	    <ul id="nav">

			<li><a href="#">Users</a>
		
				<ul class="nav_in" >
					<li><a href="admin_add_users.php" style="border-bottom:1px solid #bab5b0">Add Users</a></li>
                    
   					<li><a href="admin_edit_users.php">Edit Users</a></li>
				</ul>
			</li>
            <br />
			<li><a href="#">Job Postings</a>
		
				<ul id="nav_in">
					<li><a href="admin_create_postings.php" style="border-bottom:1px solid #bab5b0">Create Postings</a></li>
                    
   					<li><a href="admin_edit_postings.php">View Postings</a></li>
					
				</ul>
			</li>
		
		
		
		</ul>
</div>
    </div>
    </div> <!--the text in the quotes after value will appear on the button-->
</div> <!-- END of wrapper -->
</br></br></br></br></br></br>
<div id="templatemo_bottom_wrapper">
	<div id="templatemo_bottom">
    	
    
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
	header('Location:'.$host_path.'admin_login.php');
}
?>