<?php
require "db.php";
$confirm=0;
function test_input($data)
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
if (isset($_GET["id"]) && isset($_GET["confirm"]))
{
	$id=$_GET["id"];
	if($debug==1)
		echo "delete_postings";
	$confirm=1;
	//echo $confirm;	
//	$result=mysqli_query($con,$statement1);
	//echo $result;
	
	//echo "\n\n\n". $statement1;
}
   
	if(isset($_GET['id']) && isset($_GET["delete"]))
	{   
	$id=test_input($_GET['id']);	
	if($debug==1)
		echo "delete_postings\n";
	$statement1="delete from $dbname.$admin_job_postings where id='$id'";
	if($debug==1)
		echo $statement1;	
	$result=mysqli_query($con,$statement1);
	if($debug==1)
		echo $result;
	//$op='Location:'.$host_path.'admin_edit_users.php';
	//echo $op;
	header("Location:".$host_path."admin_edit_postings.php");
	}





?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>HR Extension - Consulting, Recruitment, Corporate Events & Education</title>




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
		var r=confirm("Are you sure you want to delete this job posting?");
		if (r==true)
  			{
  			    window.location=("<?php echo $host_path;?>admin_delete_postings.php?id=<?php echo $id; ?>&delete=1");

  			}
		else
  			{
  			    window.location=("<?php echo $host_path;?>admin_edit_postings.php");
  			}
			
		alert(x);
	</script>
	<?php
	}
?>
</body>

</html>