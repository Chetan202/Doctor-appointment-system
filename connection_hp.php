<?php
$servername="localhost";
$username = "root";
$password = "";
$dbname= "hospital_pj";

$conn_hp = mysqli_connect($servername,$username,$password,$dbname);

if($conn_hp)
{
	
	//echo"Connected";

}	
else
{
	die("Connection failed because".mysqli_connect_error());
}	

?>