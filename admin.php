
<?php
    include "includes/header.php";
    if(isset($_SESSION['typeuser']) && isset($_SESSION['user']) && $_SESSION['typeuser'] ==1)
    {
?>
<link href="css/modal.css" rel="stylesheet" type="text/css" />
<style>
.container-admin{
    display:flex;
    padding:0px 30px;
    flex-wrap:wrap;
}
.tittle{
    width:140px;
    height:120px;
    border-bottom:2px solid red;
    padding:10px 0px;
}
.tittle img {
    width:120px;
    height:100px;
}
.btn-product{
    display:flex;
    flex-direction: column;

}
.function-admin{
    margin-left:20%;
    margin-right:20%;
    border:3px solid pink;
    padding:10px;
}
.page-number{
    margin-left:50%;
    font-size:20px;
}
</style>
<div class="function-admin">
<span>THÔNG BÁO:</span>
    <?php
        $mod="admin";
        if(isset($_GET['act']))
        {
            $act=$_GET['act'];
            include "modules/$mod/$act.php";
        }
    ?>
    <br>
    <button type="button" onclick="momodal()">Thêm sản phẩm</button>
</div>
<div class="container-admin">
    <div class="top-like" style="margin-right:30px; margin-top:20px; width:170px">
        <h1>Chức năng</h1>
        <div class="top-item">
            <a href="#"><span>Quản lý sản phẩm</span></a>
        </div>
    </div>
    <div class="container-admin">
    <div class="tittle">id Sản Phẩm</div>
    <div class="tittle">Loại Sản Phẩm</div>
    <div class="tittle">Tên Sản Phẩm</div>
    <div class="tittle">Ảnh </div>
    <div class="tittle">Giá Sản Phẩm</div>
    <div class="tittle" style="width:80px;">Số Lượng</div>
    <div class="tittle">Nội Dung</div>
    </div>

    <?php
    //Phân trang
    $result = mysqli_query($conn, 'select count(idSP) as total from sanpham');
    $row = mysqli_fetch_assoc($result);
    $total_records = $row['total'];
    $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
    $limit = 10;
    $total_page = ceil($total_records / $limit);
    if ($current_page > $total_page){
        $current_page = $total_page;
    }
    else if ($current_page < 1){
        $current_page = 1;
    }
    $start = ($current_page - 1) * $limit;
    $sql = "select * from sanpham LIMIT $start,$limit";
        $result = mysqli_query($conn,$sql);
        if($result)
        {
            while($row=mysqli_fetch_assoc($result))
            {
    ?>            
    <div class="container-admin" style="padding-left:230px;">
    <div class="tittle" ><?php echo $row['idSP']; ?></div>
    <div class="tittle"><?php echo $row['LoaiSP']; ?></div>
    <div class="tittle"><?php echo $row['TenSP']; ?></div>
    <div class="tittle"><?php echo "<img src='".$row['AnhSP']."'>";?></div>
    <div class="tittle"><?php echo number_format($row['GiaSP'],0,".",","); ?></div>
    <div class="tittle" style="width:80px;"><?php echo $row['SoLuong']; ?></div>
    <div class="tittle"><?php echo CatChuoi($row['NoiDung'],15); ?></div>
    <div class="btn-product">
    <a href="admin.php?act=sua&idSP=<?php echo $row['idSP']; ?>"><button>Chỉnh sửa</button></a>
    <a href="admin.php?act=xoa&idSP=<?php echo $row['idSP']; ?>"><button>Xóa</button></a>
    </div>
    </div>
<?php
            }
        }
    ?>    
    
</div>
<div class="page-number">
<?php
    echo '<a href="admin.php?page=1"><<</a> ';
    if ($current_page > 1 && $total_page > 1){
        echo '<a href="admin.php?page='.($current_page-1).'">Prev</a> | ';
    }
    
    // Lặp khoảng giữa
    for ($i = 1; $i <= $total_page; $i++){
        // Nếu là trang hiện tại thì hiển thị thẻ span
        // ngược lại hiển thị thẻ a
        if ($i == $current_page){
            echo '<span style="color:red;">'.$i.'</span> | ';
        }
        else{
            echo '<a href="admin.php?page='.$i.'">'.$i.'</a> | ';
        }
    }
    
    // nếu current_page < $total_page và total_page > 1 mới hiển thị nút prev
    if ($current_page < $total_page && $total_page > 1){
        echo '<a href="admin.php?page='.($current_page+1).'">Next</a> | ';
    }
    echo '<a href="admin.php?page='.$total_page.'">>></a> ';
?>
</div>
<!-- The Modal -->
<div id="myModal" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
      <div class="modal-header">
        <span class="close">&times;</span>
        <h2>Đăng nhập</h2>
      </div>
      <div class="modal-body">
      <form action="admin.php?mod=admin&act=them" method="post"  enctype="multipart/form-data">
      <label>Loại sản phẩm</label>
      <select name="optLoaiSP">
      <?php
        $sql = "select MaLoai from loaisp";
        $result = mysqli_query($conn,$sql);
        if($result)
        {
            while($row=mysqli_fetch_assoc($result))
            {
    ?>    
        <option value="<?php echo $row['MaLoai'] ?>"><?php echo $row['MaLoai'] ?></option>
      <?php
            }
        }
    ?>  
      </select>
      </br>
      <label>Tên sản phẩm</label>
      <input type="text" name="txtTenSP" required>
      </br>
      <label>Ảnh sản phẩm</label>
      <input type="file" name="image" required>
      </br>
      <label>Giá sản phẩm</label>
      <input type="text" name="txtGiaSP" required>
      </br>
      <label>Số lượng sản phẩm</label>
      <input type="text" name="txtSoLuongSP" required>
      </br>
      <label>Nội dung</label></br>
      <textarea name="txtndSP" cols="50" row="10" > 
      </textarea>
      </br>
      <button type="submit">Thêm sản phẩm</button>
    </form>
      </div>
      <div class="modal-footer">
        <h3>Modal Footer</h3>
      </div>
    </div>
  </div>
    



<script src="js/jquery.js"></script>
	<script src="js/jquery-ui.min.js"></script>
	<script src="js/flyto.js"></script>
    <script>
        $('#templatemo_content_right').flyto({
            item      : '.templatemo_product_box',
            target    : '.cart',
            button    : '.my-btn'
        });
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
// btn.onclick = function() {
    
//     modal.style.display = "block";
// }
function momodal()
{
    modal.style.display = "block";
}
// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

</script>
<?php
        } else
        echo 'Bạn cần phải đăng nhập'.'<a class="menu-link" href="login.php">ĐĂNG NHẬP</a>';
    include "includes/footer.php";
?>