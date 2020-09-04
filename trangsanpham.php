<?php 
include_once('includes/header.php');
include_once('includes/connect.php');
?>
<div style="margin-left:75px; margin-right:75px;">
    <div class="selection" style="width:80%; height:50px; padding-top:20px;">
    <form   >
    <label >Chọn Giá:</label>
    <select name="Loc" id="Gia">
        <option value="min-max" <?php if(isset($_GET['Loc'])) {if($_GET['Loc']=='min-max') echo "selected";  }?>>thấp đến cao</option>
        <option value="max-min" <?php if(isset($_GET['Loc'])) {if($_GET['Loc']=='max-min') echo "selected";  }?>>cao đến thấp</option>
    </select>
    <input type="submit" value="Lọc">
    </form>
    </div>
    <h1 style="color:#de8ebe" >Tên Sản Phẩm:<?php if(isset($_GET['tensp'])) $_SESSION['tensp'] = $_GET['tensp']; echo $_SESSION['tensp']; ?></h1>
    <div class="product-info">
            <?php 
                if(isset($_GET['Gia']))
                {
                    
                    foreach($GiaTien as $i =>$value)
                    {
                        if($value <= $_GET['Gia'] && $value>=$_GET['Gia']-5000000 )
                        {
                        ?>
                        <div class="product-item">
                        <div class="container-item">
                            <a href="trangcon.php?PhanLoai=<?php echo $PhanLoai,$i,"&&Giatien=",$GiaTien[$i],"&&Ten=",$Ten[$i];?>">
                                <img src="./image/pet<?php echo $i+1;?>.jpg" width="260px" height="270px" alt="">
                            </a>
                        </div>
                        <div class="product-item-info">
                            <span style="color:#333; font-family: 'Coiny', cursive; font-weight: 700;"><a href="trangcon.php?pet=<?php echo $PhanLoai,$i,"&&Giatien=",$GiaTien[$i],"&&TenPet=",$Ten[$i];?>"><?php echo $Ten[$i]; ?></a></span>
                            <span style="color:#de8ebe;"><?php echo number_format($GiaTien[$i],0,",","."); ?></span>
                        </div>
                        </div>
                        <?php
                        }
                    }
                    
                    
                }
                else{
                    //xuat ra cac sp
                $LoaiSP = $_GET['LoaiSP'];
                $timenow = date('Y-m-d H:i:s');
                $sql="SELECT *,datediff('$timenow',ngaythem) as datenew FROM SanPham where LoaiSP = '$LoaiSP'";
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
                            <span style="color:#de8ebe;"><?php echo number_format($row[4],0,",","."); ?> Đ <?php include('./modules/product/newproduct.php'); ?></span>
                    </div>
                </div>
                <?php
                    } 
                } 
                    }
                    ?>
            </div>
</div>
<?php 
include_once('includes/footer.php');
?>