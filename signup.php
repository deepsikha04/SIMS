<!DOCTYPE html>
<html>
	<head>
		<title>From Login and Register</title>
		<link rel="stylesheet" href="styless.css">
	</head>
	<body>
		<div class="signup">
<?php
if(isset($_POST['submit']))
{
	$email=$_POST['email'];
	$pass=$_POST['pass'];
	$conpass=$_POST['conpass'];
	$errors=array();
	if(empty($email) OR empty($pass) OR empty($conpass))
	{
		array_push($errors,"All fields are required");
	}
	if(!filter_var($email,  FILTER_VALIDATE_EMAIL)){
		array_push($errors,"Email is not valid");
	}
	if(strlen($pass)<5){
		array_push($errors,"Password must be 5 characters.");
	}
	if($pass!==$conpass){
		array_push($errors,"Password does not match.");
	}
	include ("db.php");
	$sql = "SELECT * FROM cdetail WHERE username ='$email'";
	$result = mysqli_query($con,$sql);
	$rowCount = mysqli_num_rows($result);
	if($rowCount>0)
	{
		array_push($errors, "Email already exits!");
	}
	if(count($errors)>0){
		foreach($errors as $error)
		{
			echo"<div class='alert alert-danger'>$error</div>";
		}
	}
	else{
		$sql = "Insert into cdetail(username,password) VALUES (?,?)";
		$stmt = mysqli_stmt_init($con);
		$prepareStmt = mysqli_stmt_prepare($stmt,$sql);
		if($prepareStmt){
			mysqli_stmt_bind_param($stmt,"ss",$email,$pass);
			mysqli_stmt_execute($stmt);
			echo "<div class = 'alert alert-success'>You are registered successfully.</div>";
		}
		else{
				die("Something went wrong");
			}
	}
}
?>
			
	<h1>Sign up</h1>
	<h4>It's free and only takes a minute</h4>
		<form method="POST">
		<label>Email</label>
		<input type="email" name="email" required>
		<label>Password</label>
		<input type="Password" name="pass" required>
		<label>Confirm Password</label>
		<input type="Password" name="conpass" required>
		<input type="submit" name="submit" value="Submit">
	</form>
	<p>By Clicking the Sign Up button, you agree to our<br>
	<a href="">Terms and Condition</a> and <a href="#">Policy Privacy</a>
</p>
<p>Already have an account? <a href="Loginform.php">Login Here</a></p>
</html>