<?php
include("connection_hp.php");
error_reporting(0);
$id = $_GET['id'];
$query = "DELETE FROM med WHERE id='$id'";
$data=mysqli_query($conn_hp,$query);
if($data){
	echo "<script>alert('Record Deleted')</script>"
	?>
	<META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost:8080/hospital/doctor.php"  >
	<?php
}
else{
	echo "<font color='red'>Sorry, Delete process failed";
}
?>