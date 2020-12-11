<?php
$servername="localhost";
$username = "root";
$password = "";
$dbname= "plogin";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if($conn)
{
	
}	
else
{
	die("Connection failed because".mysqli_connect_error());
}	

?>