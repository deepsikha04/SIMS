<?php
session_start();
if(!isset($_SESSION["key"])){
	header("location:login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title> Dashboard</title>
	<link rel="stylesheet" type="text/css" href="dashboard.css">
</head>
<body>
<div class="container">
			<div class="container">
			<h1>School Management System</h1>
				<nav>
					
						<a href="home.php">Home</a><br><br>
						<a href="">Admission</a><br><br>
						<a href="">Admin-panel</a><br><br>
						<a href="">About Us</a><br><br>
						<a href="">Contact Us</a><br>
					
				</nav>
			</div>
</body>
</html>