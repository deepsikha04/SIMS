<!DOCTYPE html>
<html>
	<head>
		<title>From Login and Register</title>
		<link rel="stylesheet" href="summerlogin.css">
	</head>
	<body>
		<div class="container">
<?php
if(isset($_POST['submit']))
{
	$email=$_POST['email'];
	$pwd1=$_POST['pwd1'];
	$pwd2=$_POST['pwd2'];
	$errors=array();
	if(empty($email) OR empty($pwd1) OR empty($pwd2))
	{
		array_push($errors,"All fields are required");
	}
	if(!filter_var($email,  FILTER_VALIDATE_EMAIL)){
		array_push($errors,"Email is not valid");
	}
	if(strlen($pwd1)<8){
		array_push($errors,"Password must be 5 characters.");
	}
	if($pwd1!==$pwd2){
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
			mysqli_stmt_bind_param($stmt,"ss",$email,$pwd1);
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
	<h4>Register yourself here!!</h4>
		<form action="summerlogin.php" method="post">
		<label>Email</label>
		<input type="email" name="email" required>
		<label>Password</label>
		<input type="password" name="pwd1" required>
		<label>Confirm Password</label>
		<input type="password" name="pwd2" required>
		<input type="submit" name="submit" value="Register">
	</form>
	<p>By Clicking the Sign Up button, you agree to our<br>
	<a href="">Terms and Condition</a> and <a href="#">Policy Privacy</a>
</p>
<p>Already have an account? <a href="Loginform.php">Login Here</a></p>
</html>