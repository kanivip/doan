<?php
        $idSP = $_GET['idSP'];
        $sql = "select * from sanpham where idSP = $idSP ";
        $result = mysqli_query($conn,$sql);
        if($result)
        {
            while($row=mysqli_fetch_assoc($result))
            {

    ?>
<div <?php if(isset($_GET['a'])=='dong') echo 'style="display:none;"'; ?>>  
<form action="admin.php?mod=admin&act=sua&idSP=<?php echo $idSP; ?>" method="post"  enctype="multipart/form-data">
      <label>Loại sản phẩm</label>
      <select name="optLoaiSP">
      <?php
        $sql1 = "select MaLoai from loaisp";
        $result1 = mysqli_query($conn,$sql1);
        if($result1)
        {
            while($row1=mysqli_fetch_assoc($result1))
            {
    ?>    
        <option value="<?php echo $row1['MaLoai']; ?>" <?php if($row1['MaLoai']==$row['LoaiSP']) echo "selected";?>><?php echo $row1['MaLoai']; ?></option>
      <?php
            }
        }
    ?>  
      </select>
      </br>
      <label>Tên sản phẩm</label>
      <input type="text" name="txtTenSP" value="<?php echo $row['TenSP'] ?>" >
      </br>
      <label>Ảnh sản phẩm</label>
      <input type="file" name="image" value="<?php echo $row['AnhSP'] ?>" >
      </br>
      <label>Giá sản phẩm</label>
      <input type="text" name="txtGiaSP" value="<?php echo $row['GiaSP'] ?>" >
      </br>
      <label>Số lượng sản phẩm</label>
      <input type="text" name="txtSoLuongSP" value="<?php echo $row['SoLuong'] ?>" >
      </br>
      <label>Nội dung</label>
      </br>
      <textarea name="txtndSP" cols="50" rows="10" ><?php echo $row['NoiDung'] ?> 
      </textarea>
      </br>
      <button type="submit">Sửa sản phẩm</button>
      <a href ="admin.php?a=dong"><button type="button">Đóng</button></a>
      <?php
            }
        }
      ?>
    </form>
</div>
    <?php
        if(isset($_FILES['image']))
        {
        $address = "upload/".basename($_FILES['image']['name']);
        move_uploaded_file($_FILES['image']['tmp_name'],"$address");
        SuaSP($_GET['idSP'],$_POST['optLoaiSP'],$_POST['txtTenSP'],$address,$_POST['txtGiaSP'],$_POST['txtSoLuongSP'],$_POST['txtndSP'],$conn);
        }
    ?>