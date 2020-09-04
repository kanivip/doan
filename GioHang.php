
<?php include_once('includes/header.php') ?>
<style>
.Title ul{
    display:flex;
    padding:0px 5%;
}
.Title ul li{
    padding:1% 50px;
    width:200px;
    height:100px;
    border-top:1px solid red;
}
.Title ul li img{
    width:100px;
    height:100px;
}
.order{
    display:flex;
    padding:0px 5%;
}


</style>
<?php
if(isset($_GET['dathang'])&&isset($_SESSION['user']))
{
    if(isset($_SESSION['GH']))
    {
        $datenow = date('Y-m-d H:i:s');
        $id=ThemHD($_SESSION['user'], $_GET['address'], $_GET['phone'],$_GET['fullname'],$datenow,TongTien($_SESSION['GH']),$conn);
        if(ThemCTHD($id,$_SESSION['GH'],$conn))
        {
            echo 'Bạn đã đặt hàng thành công';
            unset($_SESSION['GH']);
        }
            else 
            echo 'Bạn đã đặt hang thất bại';
    }else
    echo '<center><h2>Bạn chưa mua hàng</h2></center>';
}
?>
<div class="container-cart">
<div class="Title">
    <ul style="height:40px;">
        <li>ID sản phẩm</li>
        <li>Ảnh</li>
        <li>Tên sản phẩm</li>
        <li>Số lượng</li>
        <li>Giá</li>
        <li></li>
    </ul>
</div>
<?php 
    if(isset($_SESSION['GH']))
    {
    foreach($_SESSION['GH'] as $ID => $info)
        {
        ?>
        <div class="Title">
            <ul>
                <li><?php echo $info['LoaiSP']." ".$ID; ?></li>
                <li><?php echo " <a href='trangcon.php?idSP=".$ID."'><img src='".$info['AnhSP']."'></a>"?></li>
                <li><?php echo $info['TenSP']; ?></li>
                <li><?php echo $info['SoLuong']; ?></li>
                <li><?php echo number_format($info['GiaSP'],0,",","."); ?></li>
                <li><a href="GioHang.php?act=xoa&id=<?php echo $ID?>"><button>Xóa</button></a></li>
            </ul>
        </div>
<?php
        }

?>
<div class="Title">
    <ul>
        <li>Tông Cộng:</li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li><?php  echo number_format(TongTien($_SESSION['GH']),0,",","."); 
            }
            else
            echo "<center><h2>Bạn chưa có sản phẩm nào</h2></center>";
        ?></li><br>
    </ul>
</div>
<div class="order">
    <form action="GioHang.php" method="get">
    <label for="">Tên người nhận</label>
    <input type="text"  class="text-box" name="fullname" required></br>
    <label for="">Địa chỉ</label>
    <input type="text" class="text-box" name="address" required></br>
    <label for="">Số điện thoại</label>
    <input type="number" class="text-box" name="phone" required></br>
    <button type="submit" name="dathang">Đặt Hàng</button>
    </form>
</div>

</div>
<?php include_once('includes/footer.php') ?>