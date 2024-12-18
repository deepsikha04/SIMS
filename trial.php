<!DOCTYPE html>
<html>
    <head><title>Login to panel</title>
        <link rel="stylesheet" href="styles.css">
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    </head>
    <body>
        <div class="wrapper">
            <?php
            if(isset($_POST['submit']))
            {
                $email = $_POST['email'];
                $pwd = $_POST['pwd'];
                require_once ("db.php");
                $sql = "Select id,password as pwd FROM login where id = '$email'";
                $r = mysqli_query($con,$sql);
                $user = mysqli_fetch_assoc($r);
                //$user = mysqli_fetch_array($result,MYSQLI_ASSOC);
                
                if($user)
                {
                    if($pwd==$user['pwd']){
                        $_SESSION["key"] = $email;
                        header("Location: index.php");
                        die();
                    }
                    else{
                        echo "<div class= 'alert alert-danger'>Password does not match</div>";
                    }
                }else{
                    echo "<div class= 'alert alert-danger'>Email does not match</div>";
                }
            }
                        
            ?>
            <form action="login.php" method="post">
            <h1>Login</h1>
            <div class="input-box">
                <input type="text" name="email" placeholder="Username" required>
                <i class='bx bxs-user'></i>
            </div>
            <div class="input-box">
                <input type="Password" name="pwd" placeholder="Password" required>
                <i class='bx bxs-lock-alt'></i>
            </div>
            <div class="checkbox">
            <a href="student.php" >Student</a><br><br>
            <a href="admin.php" >Admin</a><br><br>
            </div>
            
            <button type="submit class="btn" name="submit">Login</button>
    
            </form>
        </div>
        </body>
        </html>
    </body>
</html>