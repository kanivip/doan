<!DOCTYPE html>
<?php session_start();?>
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
    <header>
        <div class="logo"  >
        <a href="index.php"><img src="./image/mat-pet-logo-300x297.png" style="align-items: center;" width="100%" height="180px" alt="logo pet" class="header-logo"></a>
        </div>
        <div class="container">
            <div class="navbar">
            <ul >
                <li style="background-color: #de8ebe;"><a class="menu-link" style=" color: white;"href="#">TRANH CHỦ</a></li>
                
                <?php if(isset($_SESSION['user'])) {?>
                <li><a class="menu-link" href="logout.php">ĐĂNG XUẤT</a></li>
                <?php }else{?>
                <li><a class="menu-link" href="login.php">ĐĂNG NHẬP</a></li>
                <?php } ?>
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
                        <span class="cart-tittle"><strong style="font-size: 1.6rem;">Giỏ hàng <?php if(isset($_SESSION['user'])) echo "của ".$_SESSION['user']; else echo" ";?></strong></span>
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
                <input type="text" class="search" placeholder="Tìm kiếm..." >    
                <button type="submit" placeholder=" " class="submit-button"><i class="fas fa-search" style="color: white;"></i></button>
            </div>
        </div>
    </header>
    </div>
    <div class="line-pink" ></div>
    <div class="container-full">
    <div class="main">
        <div class="list-product">
            <div class="tittle-product">
            <span>Trang chủ</span>
            <span>|</span>
            <span>Danh mục sản phẩm</span>
            </div>
        </div>
        <div class="container-product">
            <h2 style="text-align:center;" class="product-tittle">
                <a href="#" style="color:#de8ebe">Shop bán chó mèo cảnh</a>
            </h2>
            <div class="product-info">
            <?php 
                $Pet = array(
                    "pet1"=>array("SAM Ú NU",15000000,1),
                    "pet2"=>array("ĐÀN MÈO ANH LÔNG NGẮN",13000000,1),
                    "pet3"=>array("POODLE TRẮNG",12000000,1),
                    "pet4"=>array("HUNSKY SIỀU CUTE",10000000,1),
                    "pet5"=>array( "cÔNG CHÚA MÈO TAI CỤP",8000000,1),
                    "pet6"=>array("MÈO TAI CỤP XINH XINH",21000000,1),
                    "pet7"=>array( "MÈO CHÂN NGẮN",19000000,1),
                    "pet8"=>array("MÈO NGÁO NGƠ",16000000,1)
                );
                //if(isset($_GET['Pet']))
                //$PhanLoai = $_GET['Pet'];
                foreach($Pet as $ten => $info)
                {
            ?>
                <div class="product-item">
                    <div class="container-item">
                    <a href="trangcon.php?PhanLoai=<?php echo $ten,"&&Giatien=",$info[1],"&&Ten=",$info[0],"&&SoLuong=",$info[2];?>">
                        <img src="./image/<?php echo $ten;?>.jpg" width="260px" height="270px" alt="">
                    </a>
                    </div>
                    <div class="product-item-info">
                            <span style="color:#333; font-family: 'Coiny', cursive; font-weight: 700;"><a href="trangcon.php?PhanLoai=<?php echo $ten,"&&Giatien=",$info[1],"&&Ten=",$info[0],"&&SoLuong=",$info[2];?>"><?php echo $info[0]; ?></a></span>
                            <span style="color:#de8ebe;"><?php echo number_format($info[1],0,",","."); ?></span>
                    </div>
                </div>
                <?php 
                }
                 ?>
            </div>
            
            <h2 style="text-align:center;" class="product-tittle">
                <a href="#" style="color:#de8ebe">Phụ kiện thú cưng</a>
            </h2>
            <div class="product-info">
            <?php 
                $Phukien = array(
                    "phukien1"=>array("phụ kiện 1",12000000,1),
                    "phukien2"=>array("phụ kiện 2",2000000,1),
                    "phukien3"=>array("phụ kiện 3",17000000,1),
                    "phukien4"=>array("phụ kiện 4",6000000,1),
                    "phukien5"=>array( "phụ kiện 5",19000000,1),
                    "phukien6"=>array("phụ kiện 6",7000000,1),
                    "phukien7"=>array( "phụ kiện 7",21000000,1),
                    "phukien8"=>array("phụ kiện 8",13000000,1)
                );
                //if(isset($_GET['PhanLoai']))
                //$PhanLoai = $_GET['PhanLoai'];
                foreach($Phukien as $ten => $info)
                {
            ?>
                <div class="product-item">
                    <div class="container-item">
                    <a href="trangcon.php?PhanLoai=<?php echo $ten,"&&Giatien=",$info[1],"&&Ten=",$info[0],"&&SoLuong=",$info[2];?>">
                        <img src="./image/<?php echo $ten;?>.jpg" width="260px" height="270px" alt="">
                    </a>
                    </div>
                    <div class="product-item-info">
                            <span style="color:#333; font-family: 'Coiny', cursive; font-weight: 700;"><a href="trangcon.php?PhanLoai=<?php echo $ten,"&&Giatien=",$info[1],"&&Ten=",$info[0],"&&SoLuong=",$info[2];?>"><?php echo $info[0]; ?></a></span>
                            <span style="color:#de8ebe;"><?php echo number_format($info[1],0,",","."); ?></span>
                    </div>
                </div>
                <?php 
                }
                 ?>
            </div>
            
        </div>
    </div>
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