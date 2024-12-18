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
    <link rel="stylesheet" href="fee.css">
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
                $query = "SELECT * FROM studentfee";
            }else{
                $query = "SELECT * FROM studentfee where id = '".$_SESSION["key"]."'";
            }
            
            $result = mysqli_query($con, $query);

            // Display student records
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<div class='student'>";
                
                echo "<p>Paid Amount: " . $row['paid_amount'] . "</p>";
                
                echo "<p>Date: " . $row['date'] . "</p>";
    
                // Add more fields as needed
                echo "</div>";
            }

            // Close database connection
            mysqli_close($con);
        ?>
    </div>
</body>
</html>

    
