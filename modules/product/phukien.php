<div style="margin-left:75px; margin-right:75px;">
    <div class="selection" style="width:80%; height:50px; padding-top:20px;">
    <form >
    <label >Chọn Giá:</label>
    <select name="Gia" id="Gia">
        <option value="5000000" <?php if(isset($_GET['Gia'])) {if($_GET['Gia']==5000000) echo "selected";  }?>>dưới 5tr</option>
        <option value="10000000" <?php if(isset($_GET['Gia'])) {if($_GET['Gia']==10000000) echo "selected";  }?>>5tr-10tr</option>
        <option value="15000000" <?php if(isset($_GET['Gia'])) {if($_GET['Gia']==15000000) echo "selected";  }?>>10tr-15tr</option>
        <option value="20000000" <?php if(isset($_GET['Gia'])) {if($_GET['Gia']==20000000) echo "selected";  }?>>15tr-20tr</option>
        <option value="25000000" <?php if(isset($_GET['Gia'])) {if($_GET['Gia']==25000000) echo "selected";  }?>>20tr-25tr</option>
    </select>
    <input type="submit" value="Lọc">
    </form>
    </div>
    <h1 style="color:#de8ebe" >Tên Sản Phẩm:<?php echo "Phụ Kiện"; ?></h1>
    <div class="product-info">
    <?php
                $sql="SELECT idSP,TenSP,AnhSP,GiaSP,SoLuong,NoiDung,l.TenLoai,s.LoaiSP FROM sanpham s JOIN LoaiSP l on s.LoaiSP = l.MaLoai where s.LoaiSP='PK'";
                $result = mysqli_query($conn, $sql);
                if($result)
                {
                    while ($row=mysqli_fetch_assoc($result))
                    {
             ?>
                <div class="product-item">
                    <div class="container-item">
                    <a href="trangcon.php?idSP=<?php echo $row['idSP']; ?>">
                        <img src="<?php echo $row['AnhSP'] ?>" width="260px" height="270px" alt="">
                    </a>
                    </div>
                    <div class="product-item-info">
                            <span style="color:#333; font-family: 'Coiny', cursive; font-weight: 700;"><a href="trangcon.php?idSP=<?php echo $row['idSP']; ?>"><?php echo $row['TenSP']; ?></a></span>
                            <span style="color:#de8ebe;"><?php echo number_format($row['GiaSP'],0,",","."); ?> Đ</span>
                    </div>
                </div>
                <?php
                    } 
                } 
                    ?>
            </div>
</div>