<?php
	session_start();
	include("db.php");

	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		$email = $_POST['email'];
		$password = $_POST['pwd'];
		if(!empty($email) && !empty($password) && !is_numeric($email))
		{
			$query = "Select * from cdetail  where username ='$email'";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{
					$user_data = mysqli_fetch_assoc($result);
					if($user_data['pass'] == $password);
					{
						header("location: index.php");
						die;
					}
				}
			}
			echo "<script type='text/javascript'> alert('wrong email or password')</script>";
		}
		else{
			echo "<script type='text/javascript'> alert('wrong email or password')</script>";
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
	<link rel="stylesheet" href="styles.css">
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>
<body>
<div class="wrapper">
	<form action="Loginform.php" method="POST">
	<h1>Login</h1>
	<div class="input-box">
		<input type="text" name="email" placeholder="Email" required>
		<i class='bx bx-envelope'></i>
	</div>
	<div class="input-box">
		<input type="Password" name="pwd" placeholder="Password" required>
		<i class='bx bxs-lock-alt'></i>
	</div>
	<div class="remember-forget">
		<label><input type="checkbox">Remember Me</label>
		<a href="#">Forgot Password</a>
	</div>
	<button type="submit" value="login" name="login" class="btn">Login</button>
	<div class="register-link">
		<p>Dont have an account? <a href="register.php">Register</a></p>
	</div>
	</form>
</div>
</body>
</html>