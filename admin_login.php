<?php

require "db.php";
if($debug==1)
	print_r($_POST);
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['login_admin']))
{
	if($debug==1)
	echo "login\n";
    $username = test_input($_POST["username"]);
    $password = test_input($_POST["password"]);
	$password = SHA1($password);
	if($debug==1)
    	echo $username." ".$password." ";
	$statement1="select * from $dbname.$admin_users where username='$username' and password='$password'";
	
	if($debug==1)
		echo $statement1;	
	$result=mysqli_query($con,$statement1);
	$num_rows=mysqli_num_rows($result);
	//echo $num_rows;
	if($num_rows>=1)
		{
			$_SESSION['usertype']="admin";
			$_SESSION['username']=$username;
			header("Location:". $host_path."admin_index.php");
		}
	else
	{
		header("Location:".$host_path."admin_login.php?retry=1");
	}
	//echo $result;

}
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['logout']))
{
	if($debug==1)
		echo "logout\n";
    session_destroy();
	header("Location:".$host_path."admin_login.php");

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
    </div> <!-- END of header -->
    
    <div id="templatemo_page_intro">
    	<h1>Only for Administrators</h1>
        <p>Please sign-out after your work</p>
    </div>
    

<div id="wrapper">
		<div id="wrappertop"></div>

		<div id="wrappermiddle">

			<h2>Admin Login</h2>

			<div id="username_input">

				<div id="username_inputleft"></div>

				<div id="username_inputmiddle">
				<form action="admin_login.php" class="login" method="post" name="admin_login_form">
					<input type="text" name="username" id="url" value="Username" onclick="this.value = ''">
					<img id="url_user" src="./images/mailicon.png" alt="">
				
				</div>

				<div id="username_inputright"></div>

			</div>

			<div id="password_input">

				<div id="password_inputleft"></div>

				<div id="password_inputmiddle">
				
					<input type="password" name="password" id="url" value="Password" onclick="this.value = ''">
					<img id="url_password" src="./images/passicon.png" alt="">
                    <input type="hidden" name="login_admin" value="wut"/>

				
				</div>

				<div id="password_inputright"></div>

			</div>

			<div id="submit">
				
				<input type="image" src="./images/submit_hover.png" id="submit1" value="Sign In">
				<input type="image" src="./images/submit.png" id="submit2" value="Sign In" >
				</form>
			</div>


			<div id="links_left">

			<!--<a href="#">Wrong Username/Password</a> -->

			</div>

			
		<div id="links_left">
			<?php
			if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['retry']))
			{
			 
			 echo '	<font color="red">Wrong Username/Password</font> ';
			
			}
			?>
			</div>

		</div>
		<div id="wrapperbottom"></div>

		
	</div>
    </div> <!-- END of main -->
</div> <!-- END of wrapper -->

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
