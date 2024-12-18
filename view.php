<?php
session_start();
if(!isset($_SESSION["type"]) && !isset($_SESSION['key'])){
    header("location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>View Students</title>
    <link rel="stylesheet" href="view.css">
    
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
                $query = "SELECT * FROM studentdetail";
            }else{
                $query = "SELECT * FROM studentdetail where id = '".$_SESSION["key"]."'";
            }
            
            $result = mysqli_query($con, $query);
            ?>
            <table border="1" cellspacing="7" width="100%">
            <tr>
            <th width="15%">ID</th>
            <th width="20%">Student Name</th>
            <th width="10%">Mobile Number</th>
            <th width="10%">Grade</th>
            <th width="5%">Gender</th>
            <th width="15%">Operation</th>
            </tr>
            
            <?php
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<div class='student'>";
                echo "<tr>
                    <td>".$row['id']."</td>
                    <td>".$row['sname']."</td>
                    <td>".$row['smobile']."</td>
                    <td>".$row['class']."</td>
                    <td>".$row['gender']."</td>
                    <td><a href='edit.php?id=$row[id] &name=$row[sname] &mobile=$row[smobile] &class=$row[class] &gender=$row[gender]'>Update</a></td>
                </tr>
                ";
                // Add more fields as needed
                echo "</div>";
            }

            // Close database connection
            mysqli_close($con);
        ?>
    </div>
</body>
</html>
