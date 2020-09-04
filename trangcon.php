<?php 
    include_once('includes/header.php');
    include_once('includes/connect.php');
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
        <?php
            $idSP = $_REQUEST['idSP'];
            $sql = "select * from SanPham where idSP = $idSP ";
            $result = mysqli_query($conn,$sql);
            if($result)
            {
                while($row=mysqli_fetch_row($result))
                {
            
        ?>
        <div class="product-image">
            <img src="<?php echo $row[3];?>" width="260px" height="260px"alt="cho">
        </div>
        <div class="product-details">
            <h1><?php echo $row[2]; ?></h1>
            <span>Giá tiền:<?php echo number_format($row[4],0,'.',',');?></span>
            <div class="product-amount">
                <span>Số lượng:</span>
                <button onclick="Cong()"><i class="far fa-plus-square" ></i></button>
                <button onclick="Tru()"><i class="far fa-minus-square"></i></button>
                <form action="trangcon.php" method="post">
                <input id="SoLuong" type="text" name="SoLuong" value="1"></br>
                <label>ID Sản Phảm:</label>
                <input  type="text" name="idSP" value="<?php echo $_REQUEST['idSP']; ?>" style="width:40px;border:none; " readonly >
            </div>
            <?php 
            ?>
            <div class="cart" style="margin-left:0px; margin-top:20px;">
                <button class="cart-link" type="submit" name ="ThemGH">
                    <div class="cart-border">
                        <span style="color:white;">Thêm vào giỏ hàng</span>
                    </div>
                </button>
            </div>
            </form>
            
            <div style="padding-top:10px;">Thông tin:<?php echo $row[6]; ?>
            </div>
        </div>
        <?php 
                }
            }
        ?>
    </div>
</div>
<?php
    if(isset($_GET['comment']))
        ThemBL($_SESSION['user'],$_GET['idSP'],$_GET['noidungbl'],$conn);
?>
<div style="margin-left: 30%; margin-top:20px;">
    <div>
    <?php if(isset($_SESSION['user']))
    {
            echo $_SESSION['user'];
    ?>
    </div>
    <form action="trangcon.php" method="get">
    <input type="text" name="idSP" value="<?php echo $idSP; ?>" style="display:none;">
    <div>
    <textarea name="noidungbl" cols="40" rows="3" required></textarea>
    </div>
    <button type="submit" name="comment">Bình luận</button>
    </form>
    <?php } ?>
</div>
<?php 
$id = $_REQUEST['idSP'];
$sql = "select * from binhluan where id_SP = $id";
$result = mysqli_query($conn,$sql);
while($row = mysqli_fetch_assoc($result))
{
?>
    <div style="margin-left:30%; margin-top:20px; width:30%; border: 2px solid black; background-color:rgba(199, 128, 171, 1);">
        <h2><?php echo $row['username']; ?></h2>
        <span><?php echo $row['noidung']; ?></span>
        </div>
    </div>
    </div>
    <?php
}
    ?>
</div>
<?php 
    include_once('includes/footer.php');
?>