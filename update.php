<?php
include("connection_hp.php");
error_reporting(0);
$_GET['date'];
?>
<html>
<head>
</head>
<body>
<form action="" method="GET">
<form action="" method="GET">
Name: <input type="text" name="name" value=""/><br><br>
Disease: <input type="text" name="disease" value=""/><br><br>
Address: <input type="text" name="address" value=""/><br><br>
Gender: <input type="radio" name="gender" value="Male">Male<input type="radio" name="gender" value="Female">Female<br><br>
Email: <input type="text" name="email" value=""/><br><br>
Date: <input type="text" name="date" value=""/><br><br>
<input type="submit" name="submit" value="update"/>
</form>

<?php
if($_GET['submit'])
{
	$name = $_GET['name'];
	$disease = $_GET['disease'];
	$address = $_GET['address'];
	$gender = $_GET['gender'];
	$email = $_GET['email'];
	$pdate = $_GET['date'];
	$query="UPDATE CUSTOMERS 
	SET Date = '$date' 
	WHERE id = '$id' ";
	$data = mysqli_query($conn_hp,$query);
	if($data)
	{
		echo "<font color='green' >Record updated successfuly. <a href='doctor.php'>Check updated List here</a>";
	}
	else
	{
		echo "<font color='red'>Record Not updated";
	}
		
}
else	
{
	echo "<font color='red'>Click on update button to save changes";
}	
	


?>

</body>
</html>