<?php
include 'connection.php';

if(isset($_POST['submit-btn'])){
   
    $f_password= filter_var($_POST['passowrd'],FILTER_SANITIZE_STRING);
    $name=mysqli_real_escape_string($conn,$f_password);

    $f_cpassword= filter_var($_POST['cpassword'],FILTER_SANITIZE_STRING);
    $name=mysqli_real_escape_string($conn,$f_cpassword);

    $select_user=mysqli_query($conn,"select * from users where email='$email'") or die('query failed');

    if(mysqli_num_rows($select_user)>0){
       $row= mysqli_fetch_assoc($select_user);
        if($row['user_type']=='admin'){
            $_SESSION['admin_name']=$row['name'];
            $_SESSION['admin_email']=$row['email'];
            $_SESSION['admin_id']=$row['id'];
            header('location:admin_panel.php');
        }else if($row['user_type']=='admin'){
            $_SESSION['user_name']=$row['name'];
            $_SESSION['user_email']=$row['email'];
            $_SESSION['user_id']=$row['id'];
            header('location:index.php');
        } else{
            $message[]='incorrect email or password';
        } 
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="loginstyle.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>--
</head>
<body>
    <div class="wrapper">
        <form action="" method="post">
            <h1>Login</h1>
            <div class="input-box">
                <input type="text" placeholder="Username" required>
            </div>
            <div class="input-box">
                <input type="password" placeholder="password" required>
            </div>
            <div class="remember-forgot">
                <label><input type="checkbox">Remember Me</label>
                <a href="#">Forgot password?</a>
            </div>
            <button type="submit" class="btn">Login</button>
            <div class="register-link">
                <p>Don't have an account?<a href="register.php">Register</a></p>
            </div>
        </form>
    </div>
</body>
</html>
