if(isset($_POST['update']))
{	

$id = mysqli_real_escape_string($mysqli, $_POST['id']);
$name = mysqli_real_escape_string($mysqli, $_POST['name']);
$age = mysqli_real_escape_string($mysqli, $_POST['age']);
$email = mysqli_real_escape_string($mysqli, $_POST['email']);	
if(empty($name) || empty($age) || empty($email)) {	
if(empty($name)) {
echo "<font color="red">Name field is empty.</font><br>";
}
if(empty($age)) {
echo "<font color="red">Age field is empty.</font><br>";
}
if(empty($email)) {
echo "<font color="red">Email field is empty.</font><br>";
}		
} else {	
$result = mysqli_query($mysqli, "UPDATE users SET name='$name',age='$age',email='$email' WHERE id=$id");
header("Location: index.php");
}
}
?>
	<?php
$id = $_GET['id'];

$result = mysqli_query($mysqli, "SELECT * FROM users WHERE id=$id");

while($res = mysqli_fetch_array($result))
{
$name = $res['name'];
$age = $res['age'];
$email = $res['email'];
}
?>