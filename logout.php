<?php 
session_start();
if(!empty($_SESSION))
    session_destroy();
?>
<?php include_once('includes/header.php') ?>
<h1 style="align-text:center;">Bạn đã đăng xuất thành công</h1>

<?php include_once('includes/footer.php') ?>