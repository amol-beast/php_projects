
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <script type="text/javascript">
           <?php 
	require "db.php";
if( (isset($_SESSION['usertype'])) && $_SESSION['usertype']=="admin") {	
if($sucess==1)
	{
		echo 'alert("User Information Updated Sucessfully")';
	}
else
	{
		echo 'alert("User Information Updation Failed")';
	}
?>
</script>

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
<script type="text/javascript">
function showfield(){
	value=(document.getElementById("change_password").checked);
  if(value==true){ var cus = document.getElementById('hid1').innerHTML=' <label for="password" > New Password </label> <input name="password" type="password" class="input_field"/> <label for="re_password" > Retype password </label> <input name="re_password" type="password" class="input_field"/>';}
   else document.getElementById('hid1').innerHTML="";
}
</script>
<style> #menu li:focus > ul {
    display:block;
}
li {
    outline: 0; 
}</style>
<style type="text/css">

	table, caption, tbody, tfoot, thead, tr, th, td {
		margin:0;
		padding:0;
		border:0;
		outline:0;
		font-size:100%;
		vertical-align:baseline;
		background:transparent;
	}
	
		a {color:#666;}
	
 /*	#content {width:65%; max-width:690px; margin:6% auto 0;} */
	
	/*
	Pretty Table Styling
	CSS Tricks also has a nice writeup: http://css-tricks.com/feature-table-design/
	*/
	
	table {
		overflow:hidden;
		border:1px solid #d3d3d3;
		background:#fefefe;
		width:70%;
		margin:5% auto 0;
		-moz-border-radius:5px; /* FF1+ */
		-webkit-border-radius:5px; /* Saf3-4 */
		border-radius:5px;
		-moz-box-shadow: 0 0 4px rgba(0, 0, 0, 0.2);
		-webkit-box-shadow: 0 0 4px rgba(0, 0, 0, 0.2);
	}
	
	th, td {padding:18px 28px 18px; text-align:center; }
	
	th {padding-top:22px; text-shadow: 1px 1px 1px #fff; background:#e8eaeb;}
	
	td {border-top:1px solid #e0e0e0; border-right:1px solid #e0e0e0;}
	
	tr.odd-row td {background:#f6f6f6;}
	
	td.first, th.first {text-align:left}
	
	td.last {border-right:none;}
	
	/*
	Background gradients are completely unnecessary but a neat effect.
	*/
	
	td {
		background: -moz-linear-gradient(100% 25% 90deg, #fefefe, #f9f9f9);
		background: -webkit-gradient(linear, 0% 0%, 0% 25%, from(#f9f9f9), to(#fefefe));
	}
	
	tr.odd-row td {
		background: -moz-linear-gradient(100% 25% 90deg, #f6f6f6, #f1f1f1);
		background: -webkit-gradient(linear, 0% 0%, 0% 25%, from(#f1f1f1), to(#f6f6f6));
	}
	
	th {
		background: -moz-linear-gradient(100% 20% 90deg, #e8eaeb, #ededed);
		background: -webkit-gradient(linear, 0% 0%, 0% 20%, from(#ededed), to(#e8eaeb));
	}
	
	/*
	I know this is annoying, but we need additional styling so webkit will recognize rounded corners on background elements.
	Nice write up of this issue: http://www.onenaught.com/posts/266/css-inner-elements-breaking-border-radius
	
	And, since we've applied the background colors to td/th element because of IE, Gecko browsers also need it.
	*/
	
	tr:first-child th.first {
		-moz-border-radius-topleft:5px;
		-webkit-border-top-left-radius:5px; /* Saf3-4 */
	}
	
	tr:first-child th.last {
		-moz-border-radius-topright:5px;
		-webkit-border-top-right-radius:5px; /* Saf3-4 */
	}
	
	tr:last-child td.first {
		-moz-border-radius-bottomleft:5px;
		-webkit-border-bottom-left-radius:5px; /* Saf3-4 */
	}
	
	tr:last-child td.last {
		-moz-border-radius-bottomright:5px;
		-webkit-border-bottom-right-radius:5px; /* Saf3-4 */
	}

</style>

  </head>


<body id="subpage">
<style>#docContainer .fb_cond_applied{ display:none; }</style><noscript><style>#docContainer .fb_cond_applied{ display:inline-block; }</style></noscript>
<div id="templatemo_wrapper">
	<div id="templatemo_header">
    	<div id="site_title"><a rel="nofollow" href="http://www.hrextension.in">HR Extension</a></div>

    </div> <!-- END of header -->
 
    <div id="templatemo_page_intro">
    	<h1>My Account</h1>

    </div> 
    

    <?php    
	if(isset($_GET['id']))
	{   
	
	$id=$_GET['id'];
				$statement1="select * from $dbname.$admin_job_postings where id='$id'";
				$result=mysqli_query($con,$statement1);
				$row = mysqli_fetch_array($result);
                
    ?>
     <form id="docContainer" class="fb-toplabel fb-100-item-column selected-object"
enctype="multipart/form-data" method="post" action="admin_edit_postings.php" novalidate="novalidate"
data-form="preview">
  <div style="MIN-HEIGHT: 0px" id="fb-form-header1" class="fb-form-header">
    <a id="fb-link-logo1" class="fb-link-logo" target="_blank"><img style="DISPLAY: none" id="fb-logo1" class="fb-logo" title="Alternative text" alt="Alternative text" src="common/images/image_default.png"/></a>
  </div>

<div id="section1" class="section">
    <div id="column1" class="column ui-sortable">
      <div id="item1" class="fb-item fb-100-item-column">
        <div class="fb-header">
          <h2 style="DISPLAY: inline; FONT-FAMILY: ; FONT-SIZE: 22px">
            Edit Job Postings
          </h2>
        </div>
      </div>
      <div id="item2" class="fb-item fb-100-item-column">
        <div class="fb-grouplabel">
          <label style="DISPLAY: inline" id="item2_label_0">Heading</label>
        </div>
        <div class="fb-input-box">
          <input id="item2_text_1" name="heading" maxlength="30" placeholder="" autocomplete="off"
          data-hint="" type="text" value="<?php echo $row["heading"]; ?>" />
        </div>
      </div>
      <div id="item4" class="fb-item fb-100-item-column">
        <div class="fb-grouplabel">
          <label style="DISPLAY: inline" id="item4_label_0">Location:</label>
        </div>
        <div class="fb-input-box">
          <input id="item4_text_1" name="location" maxlength="20" placeholder=""
          autocomplete="off" data-hint="Job Location" required type="text" value="<?php echo $row["location"]; ?>" />
          <div style="FONT-STYLE: normal; COLOR: #888888; FONT-WEIGHT: normal" class="fb-hint">
            Job Location
          </div>
        </div>
        <div id="item7" class="fb-item fb-100-item-column">
        <div class="fb-grouplabel">
          <label style="DISPLAY: inline" id="item7_label_0">Industry</label>
        </div>
        <div class="fb-dropdown">
          <select id="item4_text_1" name="industry" data-hint="">
          <?php
		  	$statement0="select * from $dbname.$admin_industry";
			$result2=mysqli_query($con,$statement0);
			//$row2 = mysqli_fetch_array($result2);
			$hu=mysqli_num_rows($result2);	
    		while ($row2 = mysqli_fetch_array($result2))
			 {
				 if($row2["industry"]== $row["industry"])
				 	echo '<option id="item7_0_option" selected value="'. $row2["industry"] .'" >
              '. $row2["industry"].' </option>';     	
			  	 else
				 	echo '<option id="item7_0_option" value="'. $row2["industry"] .'" >
              '. $row2["industry"].' </option>';     
			 }
		  ?>
          </select>
        </div>

      </div>
      <div id="item5" class="fb-item fb-100-item-column">
        <div class="fb-grouplabel">
          <label style="DISPLAY: inline" id="item5_label_0">Job Description</label>
        </div>
        <div class="fb-textarea">
          <textarea style="resize: none" id="item5_textarea_1" name="description"
          placeholder="" data-hint="Job Description" maxlength="10000"> <?php echo $row["description"]; ?></textarea>
          <div style="FONT-STYLE: normal; COLOR: #888888; FONT-WEIGHT: normal" class="fb-hint">
            Job Description
          </div>
        </div>
      </div>
      <div id="item6" class="fb-item fb-100-item-column">
        <div class="fb-grouplabel">
          <label style="DISPLAY: inline" id="item6_label_0">Last Date</label>
        </div>
         <input name="edit_postings" type="hidden"  class="input_field"/>
         <input name="id" value="<?php echo $id;?>" type="hidden" />
        <div class="fb-input-date">
          <input id="item6_date_1" class="datepicker" name="job_last_date" data-hint="dd/mm/yy"
          required type="date" value="<?php echo $row["last_date"]; ?>"/>
          <div style="FONT-STYLE: normal; COLOR: #888888; FONT-WEIGHT: normal" class="fb-hint">
            dd/mm/yy
          </div>
        </div>
      </div>
 
      </div>
    </div>
  </div>
    <div style="DISPLAY: none; CURSOR: default" id="fb-captcha_control" class="fb-captcha fb-item-alignment-center">
    <img src="../../../../Users/SONY/AppData/Local/Temp/FormBuilder/editordata/images/recaptchawhite.png"
    />
  </div>
  <div style="MIN-HEIGHT: 0px" id="fb-submit-button-div" class="fb-footer fb-item-alignment-center">
    
    <input id="fb-submit-button" name="submit1" class="fb-button-special" type="submit" data-regular="url('file:images/btn_submit.png')"
    value="Submit" /> 
    
    </form>
	<?php
	}
	else
	{
	$statement1="select * from $dbname.admin_job_postings";
	$result=mysqli_query($con,$statement1);

		?>
		<table>
    <thead>
		<th>Id</th>
		<th>heading</th>
		<th>location</th>
		<th>Description</th>
        <th>Industry</th>
        <th>Last Date</th>
        <th>Date Added</th>
        <th>Added by</th>
        <th>Update</th>
	</thead>
    <tbody>
    <?php  
		while ($row = mysqli_fetch_array($result)) 
		{
		$id = $row["id"];
		$heading = $row["heading"];
		$location = $row["location"];
		$description= $row["description"];
		$industry=$row["industry"];
		$last_date= $row["last_date"];
		$date_added = $row["date_added"];
		$added_by = $row["added_by"];
		echo "<tr><td>".$id ."</td><td>".$heading."</td><td>".$location."</td><td>".$description."</td><td>".$industry."</td><td>".$last_date."</td><td>".$date_added."</td><td>"	.$added_by."</td><td><a href='admin_edit_postings.php?id=".$id."'>Edit</a></td> </tr>";
		}
		echo "</tbody></table>";
	}
	?>
	</div> <!-- END of main -->
</div> <!-- END of wrapper -->

<div id="templatemo_bottom_wrapper">
	<div id="templatemo_bottom">
    	
    	
        <div>
        </div>

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