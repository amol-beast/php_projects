<?php

require "db.php";
if( (isset($_SESSION['usertype'])) && $_SESSION['usertype']=="admin") {
if($debug==1)
	print_r($_POST);

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
		<link rel="stylesheet" href="css/style8.css" type="text/css" media="all" charset="utf-8" />
		<link rel="stylesheet" href="css/MenuMatic.css" type="text/css" media="screen" charset="utf-8" />
<link rel="stylesheet" type="text/css" href="./css/style1.css">
<link rel="stylesheet" href="css/orman.css" type="text/css" media="screen" />
<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />	
<link rel="stylesheet" type="text/css" href="css/default7.css" id="theme" />
<link rel="stylesheet" type="text/css" href="css/ddsmoothmenu.css" />

<script type="text/javascript" src="js/jquery.min.js"></script>
	<script src="http://www.google.com/jsapi"></script><script>google.load("mootools", "1.2.1");</script>	

<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="./css/style1.css">
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
function validateForm()
{
var x=document.forms["add_users"]["username"].value;
if(x=== undefined || x=="")//NULL || x=='')
	{alert("Please enter Username"); return false; }

var x=document.forms["add_users"]["fullname"].value;
if(x=== undefined || x=="")//NULL || x=='')
	{alert("Please enter fullname"); return false; }
var user=x;
var x=document.forms["add_users"]["password"].value;
if(x=== undefined || x=="")//NULL || x=='')
	{alert("Please enter password"); return false; }
	
var y=document.forms["add_users"]["password1"].value;
if(y=== undefined || x!=y)//NULL || x=='')
	{alert("Passwords don't match ! Enter again"); return false; }
var message1="Add this user: " + user ;
var b1=confirm(message1);

return b1;
//var y=document.forms["add_users"]["heading"].value;
//alert(y);
}

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
<div id="greet1">
Hi <?php echo $_SESSION["username"];?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="admin_login.php?logout=1"><u>Log Out</u></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</div>

<div id="left_menu" style="font-size:12px;">
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


<div id="templatemo_wrapper">
	<div id="templatemo_header">
    	<div id="site_title"><a rel="nofollow" href="http://www.hrextension.in">HR Extension</a></div>
    </div> <!-- END of header -->
    
    <div id="templatemo_page_intro">
    	<h1>Add Users</h1>

    </div>
      </div>
    </div>
  </div>
 <form id="docContainer" class="fb-toplabel fb-100-item-column selected-object"
enctype="multipart/form-data" method="post" name="add_users" onsubmit="return validateForm()" action="admin_add_users.php"
novalidate="novalidate"
data-form="preview">
  <div style="MIN-HEIGHT: 0px" id="fb-form-header1" class="fb-form-header">
    <a id="fb-link-logo1" class="fb-link-logo" target="_blank"><img style="DISPLAY: none" id="fb-logo1" class="fb-logo" title="Alternative text" alt="Alternative text" src="common/images/image_default.png"/></a>
  </div>

<div id="section1" class="section">
    <div id="column1" class="column ui-sortable">
      <div id="item1" class="fb-item fb-100-item-column">
        <div class="fb-header">
          <h2 style="DISPLAY: inline; FONT-FAMILY: ; FONT-SIZE: 22px">
            Add Users
          </h2>
        </div>
      </div>
      <div id="item2" class="fb-item fb-100-item-column">
        <div class="fb-grouplabel">
          <label style="DISPLAY: inline" id="item2_label_0">Fullname</label>
        </div>
        <div class="fb-input-box">
          <input id="item2_text_1" name="fullname" maxlength="30" placeholder="" autocomplete="off"
          data-hint="" type="text" />
        </div>
      </div>
      <div id="item4" class="fb-item fb-100-item-column">
        <div class="fb-grouplabel">
          <label style="DISPLAY: inline" id="item4_label_0">Username</label>
        </div>
        <div class="fb-input-box">
          <input id="item4_text_1" name="username" maxlength="20" placeholder=""
          autocomplete="off" data-hint="Job Location" required type="text" />
          <div style="FONT-STYLE: normal; COLOR: #888888; FONT-WEIGHT: normal" class="fb-hint">
           
          </div>
        </div>
      <div id="item4" class="fb-item fb-100-item-column">
        <div class="fb-grouplabel">
          <label id="item4_label_0">Password</label>
        </div>
        <div class="fb-input-box">
          <input id="item4_password_1" name="password" maxlength="254" type="password"
          placeholder="" autocomplete="off" data-hint="" />
        </div>
      </div>
            <div id="item4" class="fb-item fb-100-item-column">
        <div class="fb-grouplabel">
          <label id="item4_label_0">Retype Password</label>
        </div>
        <div class="fb-input-box">
          <input id="item4_password_2" name="password1" maxlength="254" type="password"
          placeholder="" autocomplete="off" data-hint="" />
        </div>
      </div>

            <div id="item6" class="fb-item fb-100-item-column fb-one-column">
        <div class="fb-grouplabel">
          <label id="item6_label_0">Permissions</label>
        </div>
        <div class="fb-checkbox">
          <label id="item6_0_label"><input id="item6_0_checkbox" name="permissions1" type="checkbox" data-hint="" value="Check 1" /><span id="item6_0_span" class="fb-fieldlabel">Can Post Jobs</span></label>
        </div>
     </div>


      </div>
  </div>
    <input name="add_users" type="hidden"  class="input_field"/>
  <div style="MIN-HEIGHT: 0px" id="fb-submit-button-div" class="fb-footer fb-item-alignment-center">
    <input id="fb-submit-button" name="submit1" class="fb-button-special" type="submit" data-regular="url('file:images/btn_submit.png')"
    value="Submit" /> </form>
  </div>

    
        	

            
            

            
     <?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['add_users']))
{
	if($debug==1)
		echo "add users\n";
	$fullname=	test_input($_POST["fullname"]);
    $username = test_input($_POST["username"]);
    $password = test_input($_POST["password"]);
	
	$password = SHA1($password);
	
    $statement1="select * from $dbname.$admin_users where username='$username'";
	//$statement1="select * from $dbname.$admin_users where username='$username' and password='$password'";
	
	$result=mysqli_query($con,$statement1);
	$num_rows=mysqli_num_rows($result);
	$date_added=date("Y-m-d");
	$added_by=$_SESSION["username"];
	if(isset($_POST["permissions1"]))
			$canAddJobs= 1;
	else
			$canAddJobs= 0;
  
	?>
				
    <script type="text/javascript">  <?php
	if($num_rows>=1)
		{
			echo 'alert("Username Exists")';
		}
	else
		{
			$temp=$_SESSION['username'];
			$statement2="insert into $dbname.$admin_users (`id`, `username`, `password`,`fullname`, `perm_add_users`, `perm_post_jobs`, `date_added`, `added_by`) VALUES (NULL, '$username', '$password', '$fullname', '0', '$canAddJobs', '$date_added', '$added_by')";
			//echo $statement2;
			$result=mysqli_query($con,$statement2);
			if($result==1)
							echo "window.location = '".$host_path."admin_edit_users.php'";
			else
							echo "alert('Operation failed')";
		}
	
	//echo $result;

} ?>
                
</script>
            
            
		    
        
        <!--END #signup-inner -->
        </div>
        
    <!--END #signup-form -->   
    </div>

    </div> <!-- END of main -->
</div> <!-- END of wrapper -->

<div id="templatemo_bottom_wrapper">
	<div id="templatemo_bottom">
    	
    	
        
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
//echo "else part";

header("Location:".$host_path."admin_login.php");
}
?>