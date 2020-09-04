<?php 
session_start();
include('includes/connect.php');
include('includes/function.php');
?>
<?php
if(isset($_GET['act']) && isset($_GET['id']))
{
    unset($_SESSION['GH'][$_GET['id']]);
}
?>
<?php 
        //Them GH
        if(isset($_POST['idSP'])&&isset($_POST['SoLuong'])&&isset($_POST['ThemGH']))
            ThemGH($_POST['idSP'],$_POST['SoLuong'],$conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>shoppet2k</title>
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/fontawesome-free-5.12.1-web/fontawesome-free-5.12.1-web/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@600&family=Roboto&display=swap" rel="stylesheet">
    <script src="css/javascript.js"></script>
    <script src="./includes/jquery-3.5.1.min.js"></script>
</head>
<body>
<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
<script>
//Get the button
var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>
    <div class="container-full">
    <header>
        <div class="logo1"  >
        <a href="index.php"><img src="./image/mat-pet-logo-300x297.png" width="100%" height="180px" alt="logo pet" class="header-logo"></a>
        </div>
        <div class="container">
            <div class="navbar">
            <ul >
                <li style="background-color: #de8ebe;"><a class="menu-link" style=" color: white;"href="index.php">TRANH CHỦ</a></li>
                
                <?php if(isset($_SESSION['user'])) {?>
                <li><a class="menu-link" href="logout.php">ĐĂNG XUẤT</a></li>
                <?php }else{?>
                <li><a class="menu-link" href="login.php">ĐĂNG NHẬP</a></li>
                <?php } ?>
                <li><a class="menu-link" href="register.php">ĐĂNG KÍ</a></li>
                <li><a class="menu-link" href="#">THÚ CƯNG<i class="fas fa-angle-down" style="margin: 8px;"></i></a>
                    <ul>
                    <?php 
                        $sql = "select MaLoai,TenLoai from loaisp where PhanLoai = 'dog'";
                        $result = mysqli_query($conn,$sql);
                        if($result)
                        {
                            while($row = mysqli_fetch_assoc($result))
                            {
                    ?>

                        <a href="trangsanpham.php?LoaiSP=<?php echo $row['MaLoai'] ?>&&tensp=<?php echo "Chó ".$row['TenLoai'] ?>"><li><?php echo "Chó ".$row['TenLoai'] ?></li></a>
            <?php
                            }
                        }
            ?>
                    </ul>
                </li>
                <li><a class="menu-link" href="index.php?mod=product&act=phukien">PHỤ KIỆN</a></li>
                <li><a class="menu-link" href="#">GIỚI THIỆU</a></li>
                
            </ul>
            <div class="cart">
                <a href="GioHang.php" class="cart-link">
                    <div class="cart-border">
                        <i class="fas fa-shopping-cart " style=" font-size: 27px; padding: 10px 5px; color: white;"></i>
                        <div class="cart-info">
                        <span class="cart-tittle"><strong style="font-size: 1.6rem;">Giỏ hàng <?php if(isset($_SESSION['user'])) echo "của ".$_SESSION['user']; else echo" ";?></strong></span>
                        <div>
                        <span class="cart-number-product cart-tittle"><?php if(isset($_SESSION['GH']))  echo count($_SESSION['GH']); else echo 0;?> </span>
                        <span class="cart-number-product cart-tittle">sản phẩm - </span>
                        <span class="cart-number-money cart-tittle"><u><?php if(isset($_SESSION['GH']))  echo number_format(TongTien($_SESSION['GH']),0,",","."); else echo 0;?>đ</u></span>
                        </div>
                        </div>
                    </div>
                </a>
            </div>
            </div>
            <img src="./image/MatPetBanner.png" alt="hình pet" width="100%">
            <div class="search-bar" >
            <form action="search.php" method="post">
                <input type="text" class="search" placeholder="Tìm kiếm..." name="keyword">    
                <button type="submit" placeholder=" " class="submit-button"><i class="fas fa-search" style="color: white;"></i></button>
                </form>
            </div>
        </div>
    </header>
    </div>
    <div class="line-pink" ></div>