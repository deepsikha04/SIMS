<?php
session_start();
?>
<?php
if(isset($_POST['submit'])){
    $id = $_POST['id'];
    $feepaid = $_POST['feepaid'];
    $date = $_POST['date'];
require_once ("db.php");
$insert = "Insert into studentfee values('$id','$feepaid','$date')";
mysqli_query($con,$insert) or die("Insertion Error");
	echo "Record saved successfully";
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Fee Record</title>
        <link rel= "stylesheet"  href="feeadmin.css">
    
	
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
        <a href="attendance.php"><i class="fas fa-calendar-check"></i> Attendance</a>
        <a href="fee.php"><i class="fas fa-money-bill-wave"></i> Fee</a>
        <a href="logoff.php"><i class="fas fa-sign-out-alt"></i> Logoff</a>


</div>
        

    <div class="container">
    <h1>Fee Record of Students</h1>
    <div class="form">
    <form action="#" method="post">
        <label>Username</label>
        <input type="email" name="id" required/><br><br>
        <label>Paid Amount</label>
        <input type="number" name="feepaid" required><br><br>
        <label>Date</label>
        <input type="date" name="date" required/><br><br>
        <input type="submit" name="submit" value="Submit"/>
</form>
</div>
</div>
</div>
</body>
</html>

