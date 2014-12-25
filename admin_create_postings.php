<?php

require "db.php";
if( (isset($_SESSION['usertype'])) && $_SESSION['usertype']=="admin") {
function test_input($data)
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['add_job_postings']))
{
	if($debug==1)
		echo "create_postings\n";
    $heading = test_input($_POST["heading"]);
	$location = test_input($_POST["location"]);
    $description = test_input($_POST["description"]);
	$industry= test_input($_POST["industry"]);
    $last_date = test_input($_POST["job_last_date"]);
    if($debug==1)
		echo $heading." ".$location." ".$description;
	$added_by=$_SESSION["username"];
    $date_added=date("Y-m-d");
	//commands 
	
	if( !(isset($_GET['preview'])))
	{
	
	$statement1="INSERT INTO $dbname.$admin_job_postings (heading,location, description, last_date, industry, date_added, added_by) VALUES ('$heading','$location','$description','$last_date','$industry','$date_added','$added_by')";
	$result=mysqli_query($con,$statement1);
	if ($debug==1)	
		{
		echo "\n\n\n". $statement1; 
		echo $result;
		}
	header("Location:".$host_path."admin_edit_postings.php");
	}
	
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
<link rel="stylesheet" type="text/css" href="css/default7.css" id="theme" />
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
function validateForm()
{
	try {
var industry=document.forms["admin_create_postings_preview"]["industry"].value;
var heading=document.forms["admin_create_postings_preview"]["heading"].value;
//alert(y);
if (heading=== undefined || heading=="")
	{
		alert("Heading cannot be empty");
		return false;
	}


if (industry=="select_one")// || x=="")
  {
  alert("Industry must be selected");
  return false;
  }


x=document.forms["admin_create_postings_preview"]["description"].value;
if(x=== undefined || x=="")
	{
		alert("Job Description cannot be empty");
		return false;
	}
x=document.forms["admin_create_postings_preview"]["location"].value;
if(x=== undefined || x=="")
	{
		alert("Location cannot be empty");
		return false;
	}
x=document.forms["admin_create_postings_preview"]["job_last_date"].value;
if(x== undefined || x=="")
	{
		alert("Last Date cannot be empty");
		return false;
	} 
return true;	
}
	
  catch(err) {
        var text = "There was an error on this page.\n\n";
        text += "Error description: " + err.message + "\n\n";
        text += "Click OK to continue.\n\n";
        alert(txt);
    }
return false;
}
//var x=document.forms["admin_create_postings_preview"]["industry"].value;
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
<style> #menu li:focus > ul {
    display:block;
}
li {
    outline: 0; 
}</style>
  </head>


<body id="subpage">
<div id="greet1">
<?php if (isset($_SESSION["username"])) { echo "Hi ".$_SESSION["username"];?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="admin_login.php?logout=1"><u>Log Out</u></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php } ?>
</div>

<style>#docContainer .fb_cond_applied{ display:none; }</style><noscript><style>#docContainer .fb_cond_applied{ display:inline-block; }</style></noscript>
<div id="templatemo_wrapper">
	<div id="templatemo_header">
    	<div id="site_title"><a rel="nofollow" href="http://www.hrextension.in">HR Extension</a></div>
    </div> <!-- END of header -->
    
    <div id="templatemo_page_intro">
    	<h1>Create Job Postings</h1>

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
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['add_job_postings']) && isset($_GET['preview']))
{

?>
 <form id="docContainer" class="fb-toplabel fb-100-item-column selected-object"
enctype="multipart/form-data" method="post" name="admin_create_postings" action="admin_create_postings.php" novalidate="novalidate"
data-form="preview">
  <div style="MIN-HEIGHT: 0px" id="fb-form-header1" class="fb-form-header">
    <a id="fb-link-logo1" class="fb-link-logo" target="_blank"><img style="DISPLAY: none" id="fb-logo1" class="fb-logo" title="Alternative text" alt="Alternative text" src="common/images/image_default.png"/></a>
  </div>

<div id="section1" class="section">
    <div id="column1" class="column ui-sortable">
      <div id="item1" class="fb-item fb-100-item-column">
        <div class="fb-header">
          <h2 style="DISPLAY: inline; FONT-FAMILY: ; FONT-SIZE: 22px">
            Create Job Posting
          </h2>
        </div>
      </div>
      <div id="item2" class="fb-item fb-100-item-column">
        <div class="fb-grouplabel">
          <label style="DISPLAY: inline" id="item2_label_0">Heading</label>
        </div>
        <div class="fb-input-box">
          <input id="item2_text_1" name="heading" required maxlength="30" placeholder="" autocomplete="off"
          data-hint="" type="text" value="<?php echo $heading; ?>" readonly/>
        </div>
      </div>
      <div id="item4" class="fb-item fb-100-item-column">
        <div class="fb-grouplabel">
          <label style="DISPLAY: inline" id="item4_label_0">Location:</label>
        </div>
        <div class="fb-input-box">
          <input id="item4_text_1" name="location" maxlength="20" placeholder=""
          autocomplete="off" data-hint="Job Location" required type="text" value="<?php echo $location; ?>" readonly/>
          <div style="FONT-STYLE: normal; COLOR: #888888; FONT-WEIGHT: normal" class="fb-hint">

          </div>
        </div>
          <div class="fb-grouplabel">
          <label style="DISPLAY: inline" id="item4_label_0">Industry:</label>
        </div>
         <div class="fb-input-box">
          <input id="item4_text_1" name="industry" maxlength="20" placeholder=""
          autocomplete="off" data-hint="industry" required type="text" value="<?php echo $industry; ?>" readonly/>
          <div style="FONT-STYLE: normal; COLOR: #888888; FONT-WEIGHT: normal" class="fb-hint">

          </div>
        </div>

      </div>
      <div id="item5" class="fb-item fb-100-item-column">
        <div class="fb-grouplabel">
          <label style="DISPLAY: inline" id="item5_label_0">Job Description</label>
        </div>
        <div class="fb-textarea">
          <textarea style="resize: none" id="item5_textarea_1" name="description"
          placeholder="" data-hint="Job Description" maxlength="10000"  readonly><?php echo $description; ?></textarea>
          <div style="FONT-STYLE: normal; COLOR: #888888; FONT-WEIGHT: normal" class="fb-hint">

          </div>
        </div>
      </div>
      <div id="item6" class="fb-item fb-100-item-column">
        <div class="fb-grouplabel">
          <label style="DISPLAY: inline" id="item6_label_0">Last Date</label>
        </div>
        <input name="add_job_postings" type="hidden"  class="input_field"/>
         <div class="fb-input-box">
          <input id="item4_text_1" name="job_last_date" maxlength="20" placeholder=""
          autocomplete="off" data-hint="dd-mm-yy" required type="text" value="<?php echo $last_date; ?>" readonly/>
          <div style="FONT-STYLE: normal; COLOR: #888888; FONT-WEIGHT: normal" class="fb-hint">

          </div>
        </div>
      </div>
    </div>
  </div>
    
  <div style="MIN-HEIGHT: 0px" id="fb-submit-button-div" class="fb-footer fb-item-alignment-center">
    <input id="fb-submit-button" name="edit" class="fb-button-special" data-regular="url('file:images/btn_submit.png')"
    value="          Edit" onclick="history.go(-1)"/> 
    <input id="fb-submit-button" name="submit1" class="fb-button-special" type="submit" data-regular="url('file:images/btn_submit.png')"
    value="Submit" /> 
    
    </form>
  </div>

 <?php
}
else
{
 ?>
 <form id="docContainer" class="fb-toplabel fb-100-item-column selected-object"
enctype="multipart/form-data" method="post" name="admin_create_postings_preview" onsubmit="return validateForm()" action="admin_create_postings.php?preview=1" 
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
            Create Job Posting
          </h2>
        </div>
      </div>
      <div id="item2" class="fb-item fb-100-item-column">
        <div class="fb-grouplabel">
          <label style="DISPLAY: inline" id="item2_label_0">Heading</label>
        </div>
        <div class="fb-input-box">
          <input id="item2_text_1" name="heading" maxlength="30" placeholder="" autocomplete="off"
          data-hint="" type="text" />
        </div>
      </div>
      <div id="item4" class="fb-item fb-100-item-column">
        <div class="fb-grouplabel">
          <label style="DISPLAY: inline" id="item4_label_0">Location:</label>
        </div>
        <div class="fb-input-box">
          <input id="item4_text_1" name="location" maxlength="20" placeholder=""
          autocomplete="off" data-hint="Job Location" required type="text" />
          <div style="FONT-STYLE: normal; COLOR: #888888; FONT-WEIGHT: normal" class="fb-hint">

          </div>
        </div>
        <div id="item7" class="fb-item fb-100-item-column">
        <div class="fb-grouplabel">
          <label style="DISPLAY: inline" id="item7_label_0">Industry</label>
        </div>
        <div class="fb-dropdown">
          <select id="dropdown" name="industry" required  data-hint="">
            <option id="item7_0_option" value="select_one" >
              -- Select one from below--
            </option>
            <option id="item7_0_option" value="Information Technology" >
              Information Technology
            </option>
            <option id="item7_1_option" value="Manufacturing">
              Manufacturing
            </option>
            <option id="item7_2_option" value="Hospitality">
              Hospitality
            </option>
            <option id="item7_3_option" value="Financial Services">
              Financial Services
            </option>
               <option id="item7_4_option" value="Insurance Sector">
              Insurance Sector
            </option>
               <option id="item7_5_option" value="Telecom">
              Telecom
            </option>
               <option id="item7_6_option" value="Sales">
              Sales
            </option>
             <option id="item7_7_option" value="Business Development">
       		  Business Development
            </option>
           <option id="item7_8_option" value="Others">
              Others
            </option>
          </select>
        </div>
      </div>
      </div>
      <div id="item5" class="fb-item fb-100-item-column">
        <div class="fb-grouplabel">
          <label style="DISPLAY: inline" id="item5_label_0">Job Description</label>
        </div>
        <div class="fb-textarea">
          <textarea style="resize: none" id="item5_textarea_1" name="description"
          placeholder="" data-hint="Job Description" maxlength="10000" required></textarea>
          <div style="FONT-STYLE: normal; COLOR: #888888; FONT-WEIGHT: normal" class="fb-hint">

          </div>
        </div>
      </div>
      <div id="item6" class="fb-item fb-100-item-column">
        <div class="fb-grouplabel">
          <label style="DISPLAY: inline" id="item6_label_0">Last Date</label>
        </div>
        <input name="add_job_postings" type="hidden"  class="input_field"/>
        <div class="fb-input-date">
          <input id="item6_date_1" class="datepicker" name="job_last_date" data-hint="dd/mm/yy"
          required type="date" />
          <div style="FONT-STYLE: normal; COLOR: #888888; FONT-WEIGHT: normal" class="fb-hint">
            dd/mm/yy
          </div>
        </div>
      </div>
    </div>
  </div>

  <div style="MIN-HEIGHT: 0px" id="fb-submit-button-div" class="fb-footer fb-item-alignment-center">
    <input id="fb-submit-button" name="submit1" class="fb-button-special" type="submit" data-regular="url('file:images/btn_submit.png')"
    value="Preview" /> </form>
  </div>

 <?php
}
 ?>
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
</html>
<?php
}
else 
{
//echo "else part";

header("Location:".$host_path."admin_login.php");
}
?>