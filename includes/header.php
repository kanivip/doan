<!DOCTYPE html>
<?php 
session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>shoppet2k</title>
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/fontawesome-free-5.12.1-web/fontawesome-free-5.12.1-web/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@600&family=Roboto&display=swap" rel="stylesheet">
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

    <?php 
//Gio Hang
    if(isset($_GET['ThemGH']))
    {
        $GH = array();
        if(isset($_SESSION['GH']))
            $GH=$_SESSION['GH'];
        $flag = false;
        foreach($GH as $ma => $tien)
        {
            if($ma ==$_GET['Ten'])
            {
            $GH[$ma] +=$_GET['Giatien']*$_GET['SoLuong'];
            $flag=true;
            break;
            }
        }
        if(!$flag)
        {
            $GH[$_GET['Ten']] = $_GET['Giatien'];
        }
        $_SESSION['GH'] = $GH;
    }

    ?>
    <header>
        <div class="logo"  >
        <a href="index.php"><img src="./image/mat-pet-logo-300x297.png" width="100%" height="180px" alt="logo pet" class="header-logo"></a>
        </div>
        <div class="container">
            <div class="navbar">
            <ul>
                <li style="background-color: #de8ebe;"><a class="menu-link" style=" color: white;"href="index.php">TRANH CHỦ</a></li>
                <li><a class="menu-link" href="login.php">ĐĂNG NHẬP</a></li>
                <li><a class="menu-link" href="#">THÚ CƯNG<i class="fas fa-angle-down" style="margin: 8px;"></i></a>
                    <ul>
                    <a href="trangsanpham.php?tensp=Alaska Malamute"><li>Chó alaska Malamute</li></a>
                        <a href="trangsanpham.php?tensp=Chó Beagle"><li>Chó Beagle</li></a>
                        <a href="trangsanpham.php?tensp=Chó Corgi"><li>Chó corgi</li></a>
                        <a href="trangsanpham.php?tensp=Husky Sibersian"><li>Chó Husky Siberian</li></a>
                    </ul>
                </li>
                <li><a class="menu-link" href="#">PHỤ KIỆN</a></li>
                <li><a class="menu-link" href="#">DỊCH VỤ<i class="fas fa-angle-down" style="margin: 8px;"></i></a>
                    <ul>
                        <a href="#"><li>SPA</li></a>
                        <a href="#"><li>Khách sạn thú cưng</li></a>
                    </ul>
                </li>
                <li><a class="menu-link" href="#">GIỚI THIỆU</a></li>
                
            </ul>
            <div class="cart">
                <a href="GioHang.php" class="cart-link">
                    <div class="cart-border">
                        <i class="fas fa-shopping-cart " style=" font-size: 27px; padding: 10px 5px; color: white;"></i>
                        <div class="cart-info">
                        <span class="cart-tittle"><strong style="font-size: 1.6rem;">Giỏ hàng</strong></span>
                        <div>
                        <span class="cart-number-product cart-tittle"><?php if(isset($_SESSION['GH']))  echo count($_SESSION['GH']); else echo 0;?> </span>
                        <span class="cart-number-product cart-tittle">sản phẩm - </span>
                        <span class="cart-number-money cart-tittle"><u><?php if(isset($_SESSION['GH']))  echo number_format((string)array_sum($_SESSION['GH']),0,",","."); else echo 0;?>đ</u></span>
                        </div>
                        </div>
                    </div>
                </a>
            </div>
            </div>
            <img src="./image/MatPetBanner.png" alt="hình pet" width="100%">
            <div class="search-bar" >
                <input type="text" class="search" placeholder="Tìm kiếm...">    
                <button type="submit" placeholder=" " class="submit-button"><i class="fas fa-search" style="color: white;"></i></button>
            </div>
        </div>
    </header>
    </div>
    <div class="line-pink" ></div>