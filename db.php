<?php

/*  Database Details */
$testing="remote";

if($testing=="local") {
$host_path="http://localhost/he7/HR%20Extension/";
$host="localhost";
$username="root";
$password="";
$dbname="s_1";
$debug=0;
$admin_users="admin_users_1";
$admin_job_postings="admin_job_postings";
$admin_industry="admin_job_industry";
// Create Connection
$con= mysqli_connect($host,$username,$password, $dbname);
session_start();
// Check Connection
if (mysqli_connect_errno())
{
 echo "Failed to connect to MYSQL: ". mysqli_connect_error();
}
else 
{ if($debug==1)
echo "Mysql Connected"; } }

else 
{

$host_path="http://www.hrextension.in/test_123/";

$host="mysql";

$username="admin";

$password="admin";

$dbname="s_1";

$debug=0;

$admin_users="admin_users_1";

$admin_job_postings="admin_job_postings";

$admin_industry="admin_job_industry";

// Create Connection

$con= mysqli_connect($host,$username,$password, $dbname);

session_start();

// Check Connection

if (mysqli_connect_errno())
{

 echo "Failed to connect to MYSQL: ". mysqli_connect_error();

}

else 
{
if($debug==1)
  { echo "Mysql Connected";  }
}

}

?>