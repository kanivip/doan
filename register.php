<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="./css/stylelogin.css">
    <link rel="stylesheet" href="./css/fontawesome-free-5.12.1-web/fontawesome-free-5.12.1-web/css/all.min.css">
</head>
<body>
<a href="index.php"><img src="./image/mat-pet-logo-300x297.png" style="align-items: center;" width="10%" height="10%" alt="logo pet" class="header-logo"></a>
<div class="login-box">
    <h1>Đăng ký</h1>
    <form action="" method="post">
    <div class="text-box">
        <i class="fas fa-user"></i>
        <input type="text" placeholder="user name" name="username" value="<?php if(isset($_POST['username'])) echo $_POST['username'] ?>" required>
    </div>
    <div class="text-box">
        <i class="fas fa-lock"></i>
        <input type="password" placeholder="password" name="password" value="<?php if(isset($_POST['password'])) echo $_POST['password'] ?>" required>
    </div>
    <div class="text-box">
        <i class="fas fa-lock"></i>
        <input type="password" placeholder="nhập lại password" name="repassword" required>
    </div>
    <input  class ="btn" type="submit" name="submit" value="Đăng kí">
    </form>
    <?php 
    include('includes/connect.php');
    if(isset($_POST['submit']))
    {
        $username = mysqli_real_escape_string($conn,$_POST['username']);
        $password = mysqli_real_escape_string($conn,$_POST['password']);
        $repassword = mysqli_real_escape_string($conn,$_POST['repassword']);
        $sql = "select* from user where username ='$username'";
        $check = mysqli_query($conn,$sql);
        $flag = true;
        if(mysqli_num_rows($check)>0)
        {
            echo "Tài khoản đã tồn tại"."</br>";
            $flag = false;
        }
        if(strlen($username)>12)
        {
            echo "Tài khoản không quá 12 kí tự"."</br>";
            $flag = false;
        }
        if($password !=$repassword) 
        {
            echo "Nhập lại mật khẩu chưa trùng"."</br>";
            $flag = false;
        }
        $partten = "/^([A-Z]){1}([\w_\.!@#$%^&*()]+){5,31}$/";
        if(preg_match($partten ,$password)==0)
        {
            echo  "Mật khẩu của bạn phải gồm:</br>- 6-32 ký tự</br>- Chữ đầu viết hoa</br>- Có ít nhất 1 ký tự đặc biệt ";
            $flag = false;
        }
        if($flag)
        {
            $password = md5($password);
            $sql = "INSERT INTO user(username,password) VALUES(
                '$username',
                '$password'
            )";
            $query = mysqli_query($conn,$sql);
            header("location:login.php");
        }
        // else{
        //     if($password !=$repassword)
        //         echo "Nhập lại mật khẩu chưa chính xác";
        //     else
        //     {
        //     $password = md5($password);
        //     $sql = "INSERT INTO user(username,password) VALUES(
        //         '$username',
        //         '$password'
        //     )";
        //     $query = mysqli_query($conn,$sql);
        //     header("location:login.php");
        //     }
        // }
    }
    ?>
</div>
</body>
</html>