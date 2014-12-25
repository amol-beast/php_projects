<?php
require "db.php";
if (isset($_GET["id"]) && isset($_GET["delete"]))
{
	$id=test_input($_GET['id']);	
	if ($debug==1)
		echo "delete_users\n";
	$statement1="delete from $dbname.$admin_users where id='$id'";
	if($debug==1)
		echo $statement1;	
	$result=mysqli_query($con,$statement1);
	if($debug==1)
		echo $result;
	if($debug==1)
	//echo "delete_users";
	header("Location:"+$host_path+"admin_edit_users.php");
	//$confirm=1;
	
	//echo $confirm;	
//	$result=mysqli_query($con,$statement1);
	//echo $result;
	
	//echo "\n\n\n". $statement1;
}

if (isset($_GET["id"]) && isset($_GET["confirm"]))
{
	$id=$_GET["id"];
	if($debug==1)
	echo "delete_users";
	$confirm=1;
	//echo $confirm;	
//	$result=mysqli_query($con,$statement1);
	//echo $result;
	
	//echo "\n\n\n". $statement1;
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
<meta name="keywords" content="runner, blog page, full post, free template, CSS, HTML" />
<meta name="description" content="Runner, Full Blog Post, Multiple comments, free blog theme by templatemo.com" />
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" href="css/orman.css" type="text/css" media="screen" />
<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />	

<link rel="stylesheet" type="text/css" href="css/ddsmoothmenu.css" />
<script src="jquery.alerts.js" type="text/javascript"></script>
<link href="jquery.alerts.css" rel="stylesheet" type="text/css" media="screen" />
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/ddsmoothmenu.js">

/***********************************************
* Smooth Navigational Menu- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
***********************************************/

</script>
<script type="text/javascript">

function showfield(){
	value=(document.getElementById("change_password").checked);
  if(value==true){ var cus = document.getElementById('hid1').innerHTML=' <label for="password" > password </label> <input name="password" type="password" class="input_field"/> <label for="re_password" > Retype password </label> <input name="re_password" type="password" class="input_field"/>';}
   else document.getElementById('hid1').innerHTML="";
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
if($confirm==1)
	{
		
		?>
        <script type="text/JavaScript">
		//alert("a");
		//var message="fe",title="a";
		
		//jConfirm( message, [title, callback] );
		var r=confirm("Are you sure you want to delete user?");
		if (r==true)
  			{
  			    window.location=("<?php echo $host_path;?>admin_delete_users.php?id=<?php echo $id; ?>&delete=1");

  			}
		else
  			{
  				window.location=("<?php echo $host_path;?>admin_edit_users.php");
  			}
			
		//alert(x);
	</script>
	<?php
	}

	if(isset($_GET['id']))
	{   
	$id=test_input($_GET['id']);	
	echo "delete_postings\n";
	$statement1="delete from $dbname.$admin_job_postings where id='$id'";
	
	echo $statement1;	
	$result=mysqli_query($con,$statement1);
	echo $result;


    ?>
    <?php 
		
	}  
		  
	$statement1="select * from $dbname.$admin_users";
	$result=mysqli_query($con,$statement1);
	?>  
</body>

</html>