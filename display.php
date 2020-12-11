<html lang="en">

<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link type="text/css" rel="stylesheet" href="display.css">
	<title>HMS-Clone</title>
</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<a class="navbar-brand" href="#">Navbar</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link" href="http://localhost:8080/hospital/home.html">Home <span class="sr-only"></span></a>
				</li>

				<li class="nav-item active">
					<a class="nav-link" href="http://localhost:8080/hospital/doc_login.php">Doctor <span class="sr-only">(current)</span></a>
				</li>

				<li class="nav-item active">
					<a class="nav-link" href="http://localhost:8080/hospital/pat_login.php">Patient <span class="sr-only"></span></a>
				</li>
			</ul>


		</div>
	</nav>



</body>

</html>


<?php
include("connection_hp.php");
error_reporting(0);
$query = "SELECT * FROM hp ";
$data = mysqli_query($conn_hp, $query);
$total = mysqli_num_rows($data);

if ($total != 0) {
?>
	<h2>Appointment details</h2>
	<table>
		<tr>
			<th>Patient id</th>
			<th>Name</th>
			<th>Problem</th>
			<th>Address</th>
			<th>Gender</th>
			<th>Email</th>
			<th>Date</th>
		</tr>

	<?php
	while ($result = mysqli_fetch_assoc($data)) {
		echo "<tr>
				<td>" . $result['id'] . "</td>
				<td>" . $result['Name'] . "</td>
				<td>" . $result['Disease'] . "</td>
				<td>" . $result['Address'] . "</td>
				<td>" . $result['Gender'] . "</td>
				<td>" . $result['email'] . "</td>
				<td>" . $result['Date'] . "</td>
			</tr>";
	}
} else {
	echo "No records";
}

	?>
	</table>