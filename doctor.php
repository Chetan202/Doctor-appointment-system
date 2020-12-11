<?php
include("connection_hp.php");
error_reporting(0);
$query = "SELECT * FROM hp ";
$data = mysqli_query($conn_hp,$query);
$total = mysqli_num_rows($data);

if($total!=0)
{
	?>
	<table>
		<tr>
			<th>Patient id</th>
			<th>Name</th>
			<th>Problem</th>
			<th>Address</th>
			<th>Gender</th>
			<th >Email</th>
			<th>Date</th>
			<th colspan="2">Operations</th>
		</tr>

	<?php
	while($result = mysqli_fetch_assoc($data))
	{
		echo "<tr>
				<td>".$result['id']."</td>
				<td>".$result['Name']."</td>
				<td>".$result['Disease']."</td>
				<td>".$result['Address']."</td>
				<td>".$result['Gender']."</td>
				<td>".$result['email']."</td>
				<td>".$result['Date']."</td>

				<td><a href='delete.php?id=$result[id]' onclick='return checkdelete()'>Delete</a></td>
</tr>";
	}
} else {
	echo "No records";
}


?>
</table>
<script>
function checkdelete()
{
	return confirm('Are You sure you want to delete this data??');
}
</script>
