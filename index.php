<!DOCTYPE html>
<?php session_start();
        include('includes/connect.php');
        include('includes/function.php');
?>
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
    <?php 
        //Them GH
        if(isset($_GET['idSP'])&&isset($_GET['SoLuong']))
            ThemGH($_GET['idSP'],$_GET['SoLuong'],$conn);
    ?>
    <header>
        <div class="logo"  >
        <a href="index.php"><img src="./image/mat-pet-logo-300x297.png" style="align-items: center;" width="100%" height="180px" alt="logo pet" class="header-logo"></a>
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
                
                <?php if(isset($_SESSION['typeuser']) && $_SESSION['typeuser'] == 1) {?>
                <li><a class="menu-link" href="admin.php">TRANG ADM</a></li>
                <?php }else{?>
                <li><a class="menu-link" href="register.php">ĐĂNG KÍ</a></li>
                <?php } ?>
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
                <li><a class="menu-link" href="index.php?mod=admin&act=index">GIỚI THIỆU</a></li>
                
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
                <form action="index.php?mod=product&act=search" method="post">
                <input type="text" class="search" placeholder="Tìm kiếm..." name="keyword">    
                <button type="submit" placeholder=" " class="submit-button"><i class="fas fa-search" style="color: white;"></i></button>
                </form>
            </div>
        </div>
    </header>
    </div>
    <div class="line-pink" ></div>
    <div class="container-full">
    <div class="main">
    <?php
        $mod = "product";
        $act = "index";
        if(isset($_REQUEST['mod']))
            $mod = $_REQUEST['mod'];
        if(isset($_REQUEST['act']))
            $act = $_REQUEST['act'];
        include "modules/$mod/$act.php";
    ?>
    </div>
    <div class="container-full" >
        <div class="container-logo-pet" style="display:flex;">
        <?php 
            for($i=1;$i<9;$i++)
            {
        ?>
        <div class="logo-pet">
            <a href="#"><img src="./image/dog<?php echo $i;?>.png" alt=""></a>
        </div>
        <?php 
            }
        ?>
        </div>
    </div>
        <div class="line-pink" style="height:3px; margin:-39px 0px 0px 0px;" ></div>
    
    <div class="container-full">
    <div class="footer" style="margin-bottom:0px">
        <div class="info-footer">
            <h1><strong>Liên Lạc</strong></h1>
            <p><i class="fas fa-map icon-size"></i>Địa chỉ:Số xxx -Tân Bình -Hồ Chí Minh</p>
            <p><i class="fas fa-phone-alt icon-size"></i>SĐT:0989307539</p>
            <p><i class="fas fa-envelope icon-size"></i>email:shoppet2k@gmail.com</p>
        </div>
        <div class="mini-footer">
            <img src="./image/mat-pet-logo-300x297.png" alt="" width="15%" height="15%">
            <ul>
                <li><a href="#">Chính sách</a></li>
                <li><a href="#">Terms&Conditiona</a></li>
                <li><a href="#">Cookie</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Thông Tin</a></li>
                <li><a href="#">Site Map</a></li>
            </ul>
            <img src="./image/mat-pet-logo-300x297.png" alt="" width="15%" height="15%">
        </div>
    </div>
    </div>
</body>
</html>