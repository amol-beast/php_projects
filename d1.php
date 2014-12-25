<?php
function update_jsonfile()
{
$host_path="http://localhost/he7/HR%20Extension/";
$host="localhost";
$username="root";
$password="";
$dbname="test";
$debug=0;
$table="nested_category";
// Create Connection
$con= mysqli_connect($host,$username,$password, $dbname);
session_start();
// Check Connection
if (mysqli_connect_errno())
{
 echo "Failed to connect to MYSQL: ". mysqli_connect_error();
}
				$statement1="SELECT node.name, (COUNT(parent.name) - 1) AS depth FROM nested_category AS node, nested_category AS parent WHERE node.lft BETWEEN parent.lft AND parent.rgt GROUP BY node.name ORDER BY node.lft;";
				$sql=mysqli_query($con,$statement1);
				$rows = array();
while($r = mysqli_fetch_assoc($sql)) {
    $rows[] = $r;
}
$data = array('Orders' => $rows);
//print json_encode($rows);

$fp = fopen('categories_tmp.json', 'w');
if ((fwrite($fp, json_encode($rows)))!= FALSE)
	{
		//system('cp  categories_tmp.json categories.json');
	}
else
 {
	echo "Json file creation failed";
 }
fclose($fp);
}

function display_category($input_category)
{
$string = file_get_contents("categories_tmp.json");
//print $string;
$json_a = json_decode($string, true);
$found=0;
$category=$input_category;
foreach ($json_a as $item) {
	//var_dump( $item);
  if($found==1)
	{
		if($item["depth"]==$depth)
			{
				echo "</ul>";
				break;
			}
		else
			{
				if($item["depth"]==$prev+1)
					{
						echo '<ul>';
						echo '<li>'.$item["name"].'</li>';
						$prev=$item["depth"];
					}
				else
				if($item["depth"]==$prev)
					{
						echo '<li>'.$item["name"].'</li>';
						$prev=$item["depth"];
					}
				else
				if($item["depth"]==$prev-1)
					{
						echo '</ul>';
						echo '<li>'.$item["name"].'</li>';
						
						$prev=$item["depth"];
					}
			}
		
	}
  if($found==0){
  if($item["name"]==$category)
	{ echo '<ul>';$found=1;
		$depth=$item["depth"];
		$prev=$depth;
		echo '<li>'.$item["name"].'</li>';
		
	}}

	
}
}
?>