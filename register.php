<!DOCTYPE html>
<html>

<head>
	<title>Restro</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="/css/register.css">
	<!--Code by Anish-->
</head>

<body>
	<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$FullName = $_POST['FullName'];
		$userId = $_POST['userId'];
		$password = $_POST['password']; 
		// Code by Anish
		$con = mysqli_connect("localhost", "root", "", "restaurant");
		$query = "INSERT INTO users (FullName,userId,password) VALUES('$FullName','$userId','$password')";
		$result = mysqli_query($con, $query);
		if ($result) {
			echo ("Registeration Successfull");
			header("location:reg1s.php");
		} else {
			echo ("Registeration Failed");
		}
	}
	?>
	<!--Code by Anish-->
	<div class="background">
		<div class="form-container">
			<form action="" method="POST">
				<h1>Register here!</h1>
				<div class="form-group">
					<label for="FullName">Full Name</label>
					<input type="text" id="FullName" name="FullName" placeholder="Enter your full name" required>
				</div>
				<!--Code by Anish-->
				<div class="form-group">
					<label for="userId">UserId</label>
					<input type="text" id="userId" name="userId" placeholder="Choose a username" required>
				</div>
				<div class="form-group">
					<label for="password">Password</label>
					<input type="password" id="password" name="password" placeholder="Choose a password" required>
				</div>
				<button type="submit">Sign Up</button>
				<h3><a href="login.php" class="already">Already signed up?...Login</a></h3>
			</form>
		</div>
	</div>
<!--Code by Anish-->
</body>

</html>