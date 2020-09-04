<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="./css/stylelogin.css">
    <link rel="stylesheet" href="./css/fontawesome-free-5.12.1-web/fontawesome-free-5.12.1-web/css/all.min.css">
</head>
<?php session_start(); ?>
<body>
<a href="index.php"><img src="./image/mat-pet-logo-300x297.png" style="align-items: center;" width="10%" height="10%" alt="logo pet" class="header-logo"></a>
<div class="login-box">
    <h1>Đăng nhập</h1>
    <form method="post" action="">
    <div class="text-box">
        <i class="fas fa-user"></i>
        <input type="text" placeholder="user name" name="username" required>
    </div>
    <div class="text-box">
        <i class="fas fa-lock"></i>
        <input type="password" placeholder="password" name="password" required>
    </div>
    <input  class ="btn" type="submit" value="Sign In" name="submit">
    </form>
    <div class="create">
    <a href="register.php" style="color:white;"><span >Tạo tài khoản</span></a>
    </div>
    <?php 
    include_once('includes/connect.php');
    if(isset($_POST['submit']))
    {
        $username= mysqli_real_escape_string($conn,$_POST['username']);
        $password = mysqli_real_escape_string($conn,$_POST['password']);
        $password = md5($password);
        $sql = "select * from user where username = '$username' and password='$password'";
        $check = mysqli_query($conn,$sql);
        if(mysqli_num_rows($check)>0)
        {
            $_SESSION['user'] = $_POST['username'];
            $row= mysqli_fetch_assoc($check);
            $_SESSION['typeuser'] = $row['typeuser'];
            header('location:index.php');
        }
        else
            echo "Tài khoản hoặc mật khẩu chưa đúng";

    }
?>
</div>
</body>
</html>