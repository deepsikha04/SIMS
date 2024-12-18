<?php
session_start();
if(!isset($_SESSION["type"]) && !isset($_SESSION['key'])){
    header("location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>View Attendance</title>
    <link rel="stylesheet" href="attendance.css">
</head>
<body>
    <h1>View Students</h1>
    <div class="student-list">
        <?php
            require_once("db.php");
            $query="";
            echo "User: ".$_SESSION["key"];
            // Fetch students data
            if($_SESSION["type"]=="admin"){
                $query = "SELECT * FROM studentattendance";
            }else{
                $query = "SELECT * FROM studentattendance where id = '".$_SESSION["key"]."'";
            }
            
            $result = mysqli_query($con, $query);

            // Display student records
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<div class='student'>";
                echo "<p>ID: " . $row['id'] . "</p>";
                echo "<p>DATE: " . $row['date'] . "</p>";
                
                echo "<p>STATUS: " . $row['status'] . "</p>";
    
                // Add more fields as needed
                echo "</div>";
            }

            // Close database connection
            mysqli_close($con);
        ?>
    </div>
</body>
</html>

    
