
<?php
function SoLuongSP($idSP,$conn){
    $sql = "select SoLuong from sanpham where idSP = $idSP ";
    $result = mysqli_query($conn,$sql);
    if($result)
    {
        while($row=mysqli_fetch_row($result))
            echo $row[0];
    }
}
function ThemGH($idSP,$SoLuong,$conn){
    $sql = "select * from sanpham where idSP = $idSP";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_row($result);
    if(!isset($_SESSION['GH']))
    {
        $GH = array();
        $GH[$idSP] = array(
            'LoaiSP' => $row[1],
            'TenSP' => $row[2],
            'AnhSP' => $row[3],
            'GiaSP' => $row[4],
            'SoLuong' =>(int)$SoLuong,
        );
    }else{
        $GH = $_SESSION['GH'];
        if(array_key_exists($idSP,$GH))
            {
                $GH[$idSP] = array(
                    'LoaiSP' => $row[1],
                    'TenSP' => $row[2],
                    'AnhSP' => $row[3],
                    'GiaSP' => $row[4],
                    'SoLuong' =>(int)$GH[$idSP]['SoLuong']+(int)$SoLuong,
                );
            }
        else{
            $GH[$idSP] = array(
                'LoaiSP' => $row[1],
                'TenSP' => $row[2],
                'AnhSP' => $row[3],
                'GiaSP' => $row[4],
                'SoLuong' =>(int)$SoLuong,
            );
        }
    }
    $_SESSION['GH'] = $GH;
}
function TongTien($GH){
    $Tong = 0;
    foreach($GH as $value)
    {
        $Tong+=$value['GiaSP']*$value['SoLuong'];
    }
    return $Tong;
}
function CatChuoi($chuoi,$sotu){
        $arr = explode(' ',$chuoi);
        foreach($arr as $key => $value)
        {
            if($key==$sotu)
                break;
            else
                echo $value." ";
        }
}
function ThemSP($loai,$ten,$anh,$gia,$sl,$nd,$date,$conn){
    $sql = "insert into sanpham(LoaiSp,TenSP,AnhSP,GiaSP,SoLuong,NoiDung,ngaythem) values ('$loai','$ten','$anh',$gia,$sl,'$nd','$date')";
    mysqli_query($conn,$sql);
    if(mysqli_affected_rows($conn)<0)
        echo 'Thêm thất bại';
    else
        echo "Bạn đã thêm ".mysqli_affected_rows($conn)."sản phẩm";
}
function XoaSP($id,$conn){
    $sql = "delete from sanpham where idSP =$id  ";
    mysqli_query($conn,$sql);
    echo "Bạn đã xóa". mysqli_affected_rows($conn)." sản phẩm id là:".$id;
}
function SuaSP($id,$loai,$ten,$anh,$gia,$sl,$nd,$conn)
{
    if(strlen($anh)>7)
        $sql = "update sanpham set LoaiSP='$loai',TenSP='$ten',GiaSP=$gia,SoLuong=$sl,NoiDung='$nd',AnhSP='$anh' where idSP =$id";
    else
        $sql = "update sanpham set LoaiSP='$loai',TenSP='$ten',GiaSP=$gia,SoLuong=$sl,NoiDung='$nd' where idSP =$id";
    mysqli_query($conn,$sql);
    echo "Bạn đã cập nhật ".mysqli_affected_rows($conn)." sản phẩm có id là: ".$id;
}
function ThemHD($user,$dc,$sdt,$ten,$ngay,$tongtien,$conn)
{
    $sql = "insert into hoadon(username,diachi, sdt, hoten, ngaydat, tongtien)
     values ('$user', '$dc', '$sdt','$ten','$ngay','$tongtien')";
    mysqli_query($conn,$sql);
    return mysqli_insert_id($conn);
}
function ThemCTHD($id_hd,$GH,$conn)
{
    $dem = 0;
    foreach($GH as $key => $value)
    {
        $ten=$value['TenSP'];
        $sl=$value['SoLuong'];
        $gia=$value['GiaSP'];
        $sql = "insert into chitiethd(id_hd, idsp, tensp, soluong, gia)
        values ('$id_hd','$key', '$ten','$sl','$gia')";
        mysqli_query($conn,$sql);
        $dem += mysqli_affected_rows($conn);
    }
    if(count($GH)==$dem)
        return true;
        else
        return false;
}
function ThemBL($user,$id,$nd,$conn)
{
    $sql = "insert into binhluan(username, id_SP, noidung) values('$user', '$id', '$nd')";
    mysqli_query($conn,$sql);
    if(mysqli_affected_rows($conn)>0)
        return true;
        else 
        return false;

}
?>