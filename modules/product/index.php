<div class="list-product">
            <div class="tittle-product">
            <span>Trang chủ</span>
            <span>|</span>
            <span>Danh mục sản phẩm</span>
            </div>
        </div>
        <div class="container-product">
            <h2 style="text-align:center;" class="product-tittle">
                <a href="#" style="color:#de8ebe">Shop Alaska</a>
            </h2>
            <div class="product-info">
            <?php  
                $timenow=date('Y-m-d H:i:s');
                $sql="SELECT *, datediff('$timenow',ngaythem) as datenew FROM SanPham where LoaiSP = 'ALK' order by ngaythem desc limit 0, 8";
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
                            <span style="color:#de8ebe;"><?php echo number_format($row[4],0,",","."); ?> Đ <?php include('newproduct.php'); ?></i></span>
                            
                    </div>
                </div>
                <?php
                    } 
                } 
                ?>
                <script>
                    $(document).ready(function(){
                    $(".more").click(function(){
                        $.post("jaxmore.php",
                        {
                        name: "Donald Duck"
                        },
                        function(data){
                        $("#noidung").html(data);
                        });
                    });
                    });
                </script>
                <div id="noidung">
                ahihi
                </div>
                <input type="button" class="more" value = "xem them">
            </div>
            
            <h2 style="text-align:center;" class="product-tittle">
                <a href="#" style="color:#de8ebe">Phụ kiện thú cưng</a>
            </h2>
            <div class="product-info">
            <?php  
                $sql="SELECT *, datediff('$timenow',ngaythem) as datenew FROM SanPham where LoaiSP = 'PK' order by ngaythem desc ";
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
                            <span style="color:#de8ebe;"><?php echo number_format($row[4],0,",","."); ?> Đ <?php include('newproduct.php'); ?></span>
                    </div>
                </div>
                <?php
                    } 
                } 
                ?>
            </div>
            
        </div>
    </div>