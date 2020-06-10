<?php include_once('includes/header.php') ?>
<style>
.Title ul{
    display:flex;
    padding:0px 20%;
}
.Title ul li{
    padding:1% 10%;
    width:200px;
}
</style>
<?php 
function ThemCham($a){
    return substr($a,0,3).".".substr($a,3,3).".".substr($a,6,3);
}
?>
<div class="container-cart">
<div class="Title">
    <ul>
        <li>Tên sản phẩm</li>
        <li>Số lượng</li>
        <li>Giá</li>
    </ul>
</div>
<?php 
    foreach($_SESSION['GH'] as $Ten => $info)
    {
        ?>
        <div class="Title">
            <ul>
                <li><?php echo $Ten; ?></li>
                <li>Số lượng</li>
                <li><?php echo number_format($info,0,",","."); ?></li>
            </ul>
        </div>
<?php
    }
?>
<div class="Title">
    <ul>
        <li>Tông Cộng:</li>
        <li>Số lượng</li>
        <li><?php echo number_format((string)array_sum($_SESSION['GH']),0,",","."); ?></li>
    </ul>
</div>
</div>
<?php include_once('includes/footer.php') ?>