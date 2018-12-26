<?=
view('layout/head');
?>

<body>

<?= view('layout/header'); 
    view('layout/navbar',array("lstLoaiSanPham"=>$lstLoaiSanPham));
?>

<section class="content">

<?php
    view('layout/menubar',array('lstNSX'=>$lstNSX));
    view('layout/content',array('lstSanPham'=>$lstSanPham,'page'=>$page));
?>
</section>
<?php
    view('layout/footer');
?>
<script src="<?= asset('js/jquery-3.3.1.min.js')?>"></script>
<script src="<?=asset('js/bootstrap.min.js')?>"></script>
<script src="<?=asset('js/jquery.popup.min.js')?>"></script>


</body>