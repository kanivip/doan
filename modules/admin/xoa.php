<?php 
    if(isset($_GET['idSP']))
    {
        $idSP = $_GET['idSP'];
        $sql = "select AnhSp from sanpham where idSP =$idSP ";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($result);
        unlink($row['AnhSp']);
        XoaSP($_GET['idSP'],$conn);
    }
?>