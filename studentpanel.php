<?php
session_start();
if($_SESSION["type"] ==null && $_SESSION['key']==null && $_SESSION["type"]!=="student"){
    header("location:login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Student Panel</title>
	<link rel="stylesheet" href="studentpanel.css">
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>
<body>
<div class="container">
    <div class="logo">
        
    </div>
    <h1>Student Portal</h1>
    <div class="nav">
        
            <a class="active" href="shome.php"><i class="fas fa-home"></i>Home</a>
            <a href="view.php"><i class="fas fa-eye"></i>View Profile</a>
            <a href="edit.php">Edit Profile</a>
            <a href="attendance.php"><i class="fas fa-calendar-check"></i>Attendance</a>
            <a href="fee.php"><i class="fas fa-money-bill-wave"></i>Fee Structure</a>
            <a href="logout.php"><i class="fas fa-sign-out-alt"></i>Log Off</a>

</div>
</div>
</body>
</html>
