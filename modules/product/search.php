

<div class="container-full">
<div class="list-product" style="height:40px;">
    <div class="tittle-product">
    <span>Từ khóa của bạn:<?php echo $_POST['keyword'] ?> </span>
    </div>        
</div>
<div class="product-info">
<?php
    if(!empty($_POST['keyword']) && isset($_POST['keyword']))
    {
        (string)$keyword = (string)$_POST['keyword'];
        $keyword = explode(' ',$keyword);
        $keyword = '%'.implode('%',$keyword).'%';
        $sql = " select idSP, TenSP,AnhSP, GiaSP from sanpham
                where TenSP like '%$keyword%' ";
        $result = mysqli_query($conn,$sql);
        if($result->num_rows <=0)
            echo "Không có sản phẩm nào";
        if($result)
        {
            while($row=mysqli_fetch_row($result))
            {
                ?>
                <div class="product-item">
                    <div class="container-item">
                    <a href="trangcon.php?idSP=<?php echo $row[0]; ?>">
                        <img src="<?php echo $row[2] ?>" width="260px" height="270px" alt="">
                    </a>
                    </div>
                    <div class="product-item-info">
                            <span style="color:#333; font-family: 'Coiny', cursive; font-weight: 700;"><a href="trangcon.php?idSP=<?php echo $row[0]; ?>"><?php echo $row[1]; ?></a></span>
                            <span style="color:#de8ebe;"><?php echo number_format($row[3],0,",","."); ?> Đ</span>
                    </div>
                </div>
                <?php
            }
        }
    }else
    echo "Không có sản phẩm nào";

?>
</div>
</div>
