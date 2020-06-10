<?php 
include_once('includes/header.php');
?>
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
    <h1 style="color:#de8ebe" >Tên Sản Phẩm:<?php if(isset($_GET['tensp'])) $_SESSION['tensp'] = $_GET['tensp']; echo $_SESSION['tensp']; ?></h1>
    <div class="product-info">
            <?php 
                $PhanLoai = "pet";
                $GiaTien = array(
                    8000000,
                    13000000,
                    17000000,
                    15000000,
                    3000000,
                    13000000,
                    14000000,
                    21000000,
                );
                $Ten = array(
                    "SAM Ú NU",
                    "ĐÀN MÈO ANH LÔNG NGẮN",
                    "POODLE TRẮNG",
                    "HUNSKY SIỀU CUTE",
                    "cÔNG CHÚA MÈO TAI CỤP",
                    "MÈO TAI CỤP XINH XINH",
                    "MÈO CHÂN NGẮN",
                    "MÈO NGÁO NGƠ",
                );
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
                    if(isset($_GET['PhanLoai']))
                    $PhanLoai = $_GET['PhanLoai'];
                    for($i=1;$i<=8;$i++)
                    {
                ?>
                    <div class="product-item">
                        <div class="container-item">
                        <a href="trangcon.php?PhanLoai=<?php echo $PhanLoai,$i,"&&Giatien=",$GiaTien[$i-1],"&&Ten=",$Ten[$i-1];?>">
                            <img src="./image/pet<?php echo $i;?>.jpg" width="260px" height="270px" alt="">
                        </a>
                        </div>
                        <div class="product-item-info">
                                <span style="color:#333; font-family: 'Coiny', cursive; font-weight: 700;"><a href="trangcon.php?pet=<?php echo $PhanLoai,$i,"&&Giatien=",$GiaTien[$i-1],"&&TenPet=",$Ten[$i-1];?>"><?php echo $Ten[$i-1]; ?></a></span>
                                <span style="color:#de8ebe;"><?php echo number_format($GiaTien[$i-1],0,",","."); ?></span>
                        </div>
                    </div>
                    <?php 
                    }
                }
                    ?>
            </div>
</div>
<?php 
include_once('includes/footer.php');
?>