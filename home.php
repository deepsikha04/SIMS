<?php
session_start();
if($_SESSION["type"] ==null && $_SESSION['key']==null && $_SESSION["type"]!=="admin"){
    header("location:login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Panel</title>
	<link rel="stylesheet" href="home.css">
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
<main>
        

            <div class="hero-text">
                
            </div>
        </section>

        <section class="system-info">
            <h2>About Our Student Information Management System</h2>
            <p>This system helps in managing student records efficiently. It includes features such as student registration, attendance tracking, grade management, and more.</p>
            <p>With our system, you can ensure data accuracy and streamline administrative tasks, making the education process more effective and organized.</p>
        </section>

        <section class="contact-us">
            <h2>Contact Us</h2>
            <form action="send_contact.php" method="post">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
                
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                
                <label for="message">Message:</label>
                <textarea id="message" name="message" required></textarea>
                
                <button type="submit">Send Message</button>
            </form>
        </section>
    </main>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> [ Student Info]. All rights reserved.</p>
    </footer>
</div>
</body>
</html>
