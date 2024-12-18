<?php
session_start();
if($_SESSION["type"] ==null && $_SESSION['key']==null && $_SESSION["type"]!=="student"){
    header("location:login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>View Students</title>
    <link rel="stylesheet" href="views.css">
</head>
<body>
    <h1>View Students</h1>
    <div class="student-list">
        <?php
            require_once("db.php");

            // Fetch students data
            $query = "SELECT * FROM studentdetail";
            $result = mysqli_query($con, $query);

            // Display student records
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<div class='student'>";
                echo "<p>Name: " . $row['sname'] . "</p>";
                echo "<p>Mobile: " . $row['smobile'] . "</p>";
                echo "<p>Class: " . $row['class'] . "</p>";
                echo "<p>Gender: " . $row['gender'] . "</p>";
                // Add more fields as needed
                echo "</div>";
            }

            // Close database connection
            mysqli_close($con);
        ?>
    </div>
</body>
</html>
