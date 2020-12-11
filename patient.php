<?php
include("connection_hp.php");
error_reporting(0);
?>
<html>
<head>
</head>
<body>
<h1>Patient Appointment Booking</h1>
<form action="" method="GET">
Name: <input type="text" name="name" value=""/><br><br>
Disease: <input type="text" name="disease" value=""/><br><br>
Address: <input type="text" name="address" value=""/><br><br>
Gender: <input type="radio" name="gender" value="Male">Male<input type="radio" name="gender" value="Female">Female<br><br>
Email: <input type="text" name="email" value=""/><br><br>
Date: <input type="text" name="date" value=""/><br><br>
<input type="submit" name="submit" value="submit"/><br><br>
<a href="http://localhost:8080/hospital/display.php">Click me to see appointment details<a>
</form>

<?php
if($_GET['submit'])
	$id = $_GET['id'];
	$name = $_GET['name'];
	$disease = $_GET['disease'];
	$address = $_GET['address'];
	$gender = $_GET['gender'];
	$email = $_GET['email'];
	$pdate = $_GET['date'];
	
{
	if($name!="" && $disease!="" && $address!="" && $gender!="" && $email!="" && $pdate!="")
	{
		$query = "INSERT INTO hp VALUES ('$id','$name','$disease','$address','$gender','$email','$pdate')";
		$data = mysqli_query($conn_hp,$query);
		echo"Deta sent";
		if($data)
		{
			echo"<font color='green'>Details sent to hospital management";
		}
	}
	else
	{
		echo"<font color='red'><br>All fields are required";
	}		

}	

?>
</body>
</html>