<?php
include("connection_pat.php");
error_reporting(0);
?>
<html>

<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link type="text/css" rel="stylesheet" href="pat_login.css">
	<title>HMS-Clone</title>
</head>

<body>
	
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<a class="navbar-brand" href="http://localhost:8080/hms/home.html"><img class="apple-logo" src="https://www.transparentpng.com/thumb/apple-logo/d9RxbG-apple-logo-free-png.png"></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent" style="margin-left:100mm;">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link" href="http://localhost:8080/hms/home.html">Home <span class="sr-only">(current)</span></a>
				</li>

				<li class="nav-item active" style="margin-left:26mm;">
					<a class="nav-link" href="http://localhost:8080/hms/doc_login.php">Doctor <span class="sr-only"></span></a>
				</li>

				<li class="nav-item active" style="margin-left:26mm;">
					<a class="nav-link" href="http://localhost:8080/hms/pat_login.php">Patient <span class="sr-only"></span></a>
				</li>
			</ul>


		</div>
	</nav>



	<div class="body">
		<div class="container-2">
			<h2 style="margin-top: 10px;">😷</h2>
			<h2>Patient</h2>
			<form action="" method="POST">
				<div class="form-group" style="margin-top: 20px;">
					<input type="text" class="form-control" placeholder="Name" name="username">
				</div>
				<div class="form-group" style="margin-top: 10px;">
					<input type="password" class="form-control" name="password" placeholder="Password">
				</div>
				<button name="signin" type="submit" class="btn btn-warning" style="margin-top: 50px;">Sign In</button>
				<button name="signup" type="submit" class="btn btn-warning" style="margin-top: 50px; margin-left:30px;">Sign up</button>

			</form>

		</div>
	</div>




	<?php
	$user = $_POST['username'];
	$pwd = $_POST['password'];

	if (isset($_POST['signin'])) {

		$query = "SELECT * FROM patient WHERE username='$user' && password='$pwd' ";
		$data = mysqli_query($conn, $query);
		$total = mysqli_num_rows($data);
		if ($total == 1) {
			$_SESSION['user_name'] = $user;
			header('location:doctor.php');
		} else {
			echo "login failed";
		}
	}

	if (isset($_POST['signup'])) {
		if ((empty($user)) or (empty($pwd))) {

			echo '<script>alert("Please fill all fields are required 😑❗")</script>';
		} else {
			$query = "SELECT * FROM patient WHERE username='$user' && password='$pwd' ";
			$data = mysqli_query($conn, $query);
			$total = mysqli_num_rows($data);

			if ($total == 1) {
				echo '<script>alert("You have account❗❗❗")</script>';
			} else {
				$query = "INSERT INTO doctor VALUES ('$user' , '$pwd') ";
				$data = mysqli_query($conn, $query);
				$total = mysqli_num_rows($data);

				$_SESSION['user_name'] = $user;
				header('location:patient.php');
			}
		}
	}
	?>