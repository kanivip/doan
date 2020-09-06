            <?php 
            include('includes/connect.php');
            include('includes/function.php');
            ?>
<div class="product-info">
<?php
                $start = $_POST['start'];
                $timenow=date('Y-m-d H:i:s');
                $sql="SELECT *, datediff('$timenow',ngaythem) as datenew FROM SanPham where LoaiSP = 'ALK' order by ngaythem desc limit 4, $start";
                $result = mysqli_query($conn, $sql);
                if($result)
                {
                    while ($row=mysqli_fetch_row($result))
                    {
             ?>
                <div class="product-item">
                    <div class="container-item">
                    <a href="trangcon.php?idSP=<?php echo $row[0]; ?>">
                        <img src="<?php echo $row[3] ?>" width="260px" height="270px" alt="">
                    </a>
                    </div>
                    <div class="product-item-info">
                            <span style="color:#333; font-family: 'Coiny', cursive; font-weight: 700;"><a href="trangcon.php?idSP=<?php echo $row[0]; ?>"><?php echo $row[2]; ?></a></span>
                            <span style="color:#de8ebe;"><?php echo number_format($row[4],0,",","."); ?> Đ <?php include('./modules/product/newproduct.php'); ?></i></span>
                            
                    </div>
                </div>
                <?php
                    } 
                } 
                ?>
                </div>