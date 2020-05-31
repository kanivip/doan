<?php 
    include_once('includes/header.php');
?>
<div class="container-product">
    <div class="top-like">
        <h1>Top Yêu Thích</h1>
        <div class="top-item">
            <span>Mèo anh lông ngắn</span>
            <a href="#"><i class="fas fa-heart"><span>0</span></i></a>
        </div>
        <div class="top-item">
            <span>Mèo anh lông ngắn</span>
            <a href="#"><i class="fas fa-heart"><span>0</span></i></a>
        </div>
        <div class="top-item">
            <span>Mèo anh lông ngắn</span>
            <a href="#"><i class="fas fa-heart"><span>0</span></i></a>
        </div>
    </div>
    <div class="product-info-details">
        <div class="product-image">
            <img src="./image/<?php echo $_GET['PhanLoai'];?>.jpg" width="260px" height="260px"alt="cho">
        </div>
        <div class="product-details">
            <h1><?php echo $_GET['Ten'] ?></h1>
            <span>Giá tiền:<?php echo $_GET['Giatien'];?></span>
            <div class="product-amount">
                <span>Số lượng:</span><input id="SoLuong" type="text" value="0">
                <button onclick="Tang()" ><i class="far fa-plus-square" ></i></button>
                <script>
                    function Tang() {
                        var i = document.getElementById("SoLuong").value;
                        i++;
                    document.getElementById("SoLuong").value = i.toString();
                    }
                </script>
                <button onclick="Giam()" ><i class="far fa-minus-square"></i></button>
                <script>
                    function Giam() {
                        var i = document.getElementById("SoLuong").value;
                        i--;
                        if(i<=0)
                            i=0;
                    document.getElementById("SoLuong").value = i.toString();
                    }
                </script>

            </div>
            <div class="cart" style="margin-left:0px; margin-top:20px;">
                <a href="trangcon.php?PhanLoai=<?php echo $_GET['PhanLoai']?>&&Giatien=<?php echo $_GET['Giatien']?>&&Ten=<?php echo $_GET['Ten']?>&&ThemGH=1" class="cart-link">
                    <div class="cart-border">
                        <span style="color:white;">Thêm vào giỏ hàng</span>
                    </div>
                </a>
            </div>
            <?php 

                    if(isset($_GET['ThemGH']))
                    {
                        $GH = array();
                        if(isset($_SESSION['GH']))
                            $GH=$_SESSION['GH'];
                        $flag = false;
                        foreach($GH as $ma => $tien)
                        {
                            if($ma ==$_GET['PhanLoai'])
                            {
                            $GH[$ma] +=$_GET['Giatien'];
                            $flag=true;
                            break;
                            }
                        }
                        if(!$flag)
                        {
                            $GH[$_GET['PhanLoai']] = $_GET['Giatien'];
                        }
                        $_SESSION['GH'] = $GH;
                    }
                
                ?>
            <div style="padding-top:10px;">Thông tin:Một chú chó Poodle Tiny nhỏ xinh luôn là 
                sự lựa chọn 
                hàng đầu của những người chơi thú cưng Việt Nam.
                 Tìm mua được một em Poodle Tiny chó trắng lông xù
                  nữa thì càng tuyệt vời. Tuy các em ấy có phần 
                  đanh đá , lắm mồm nhưng bù lại rất thông minh, 
                  biết cách làm nũng chủ nên chưa bao giờ bị “thất 
                  sủng”.
            </div>
        </div>
    </div>
</div>
<?php 
    include_once('includes/footer.php');
?>