<?php
session_start();
?>
<?php
if(isset($_POST['submit'])){
    $id = $_POST['id'];
    $date = $_POST['date'];
    $status = $_POST['status'];

require_once ("db.php");
$insert = "Insert into studentattendance values('$id','$date','$status')";
mysqli_query($con,$insert) or die("Insertion Error");
	echo "Record saved successfully";
}
?>
<?php

if($_SESSION["type"] ==null && $_SESSION['key']==null && $_SESSION["type"]!=="admin"){
    header("location:login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Panel</title>
	<link rel="stylesheet" href="attendanceadmin.css">
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> 

</head>
<body>
<div class="container">
    <div class="logo">
        
    </div>
    <h1>Admin Portal</h1>
    <div class="nav">
    
        <a href="home.php"><i class="fas fa-home"></i> Home</a>
        <a href="view.php"><i class="fas fa-eye"></i> View</a>
        <a href="upload.php"><i class="fas fa-upload"></i> Upload</a>
        <a href="attendanceadmin.php"><i class="fas fa-calendar-check"></i> Attendance</a>
        <a href="fee.php"><i class="fas fa-money-bill-wave"></i> Fee</a>
        <a href="logout.php"><i class="fas fa-sign-out-alt"></i> Logoff</a>

</div>


    <h1>Attendance Record of Students</h1>
    <div class="form">
    <form action="#" method="post">
        <label>Username</label>
        <input type="email" name="id" required/><br><br>
        <label>Date</label>
        <input type="date" name="date" required/><br><br>
        <label>Status:</label><br>
        <input type="radio" name="status" value="0" required/>0<br>
        <input type="radio" name="status" value="1" required/>1<br><br>
        <input type="submit" name="submit" value="Submit"/>
</form>

</div>
</body>
</html>

