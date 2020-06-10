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
        <input type="text" placeholder="user name" name="name">
    </div>
    <div class="text-box">
        <i class="fas fa-lock"></i>
        <input type="password" placeholder="password" name="password">
    </div>
    <div class="text-box">
        <i class="fas fa-lock"></i>
        <input type="password" placeholder="nhập lại password">
    </div>
    <input  class ="btn" type="submit" name="submit" value="Đăng kí">
    </form>
    <?php 
    include_once('includes/connect.php');
    if(isset($_POST['submit']))
    {
        $name = mysqli_real_escape_string($connect,$_POST['name']);
        $password = mysqli_real_escape_string($connect,$_POST['password']);
        $password= md5($password);
        $sql = "INSERT INTO information(name,password) VALUES(
            '$name',
            '$password'
        )";
        $query = mysqli_query($connect,$sql);
    }
    ?>
</div>
</body>
</html>