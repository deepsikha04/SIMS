<!DOCTYPE html>
<html>
<head>
<title>Registration Page</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">
</head>
<body>
<form action="registration.php" method="post">
<h1>Register</h1>
<div class="form-group">
<input type = "email" name="email" placeholder="Enter your email" required/>
</div>
<div class="form-group">
<input type = "password" name="pwd" placeholder="Enter password" required/>
</div>
<div class="form-group">
<input type = "password" name="pwd1" placeholder="Confirm password" required/>
</div>
<div class="btn">
<input type="submit" name ="submit" value="Register"/>
</div>
</form>
</div>
<p>By clicking the Sign Up button, you agree to our<br>
<a href="">Terms and Condition</a> and <a href="#">Policy privacy</a>
</p>
<p>Already have an account? <a href="login.php">Login Here</a></p>
</body>
</html>