<?php include_once('includes/header.php') ?>
<style>
.Title ul{
    display:flex;
    padding:0px 10%;
}
.Title ul li{
    padding:1% 10%;
    width:300px;
}
</style>
<div class="container-cart">
<div class="Title">
    <ul>
        <li>Tên sản phẩm</li>
        <li>Số lượng</li>
        <li>Giá</li>
    </ul>
</div>
<?php 
    if(isset($_SESSION['GH']))
    {
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
        <li><?php  echo number_format((string)array_sum($_SESSION['GH']),0,",","."); 
            }
            else
            echo "Bạn chưa có sản phẩm nào";
        ?></li>
    </ul>
</div>
</div>
<?php include_once('includes/footer.php') ?>