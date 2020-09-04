<?php
    
    if(isset($_FILES['image']))
    {
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $datenow = date('Y-m-d H:i:s');
        $flag = true;
        $arr_img = array (
            'image/png',
            'image/jpeg',
            'image/jpg'
        );
        if(!in_array($_FILES['image']['type'],$arr_img))
        {
            $flag = false;
            echo "Chỉ nhận ảnh đuôi *.png,*.jpeg,*.jpg </br>";
        }
        if($_FILES['image']['size']>200000)
        {
            $flag = false;
            echo "Dung lượng ảnh quá lớn.Chỉ nhận dưới 200KB </br>";
        }
        if(strlen($_POST['txtTenSP'])>60)
        {
            $flag = false;
            echo "Tên quá dài. chỉ nhận dưới 60 kí tự </br>";
        }
        if($flag)
        {
        $address = "upload/".basename($_FILES['image']['name'].time());
        move_uploaded_file($_FILES['image']['tmp_name'],"$address");
        ThemSP($_POST['optLoaiSP'],$_POST['txtTenSP'],$address,$_POST['txtGiaSP'],$_POST['txtSoLuongSP'],$_POST['txtndSP'],$datenow,$conn);
        }
    }
?>
