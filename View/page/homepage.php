<?=
view('layout/head');
?>

<body>

<?= view('layout/header'); 
    view('layout/navbar',array("lstLoaiSanPham"=>$lstLoaiSanPham));
    view('layout/content');
    view('layout/footer');
?>



<script src="<?= asset('js/jquery-3.3.1.min.js')?>"></script>
<script src="<?=asset('js/bootstrap.min.js')?>"></script>
<script src="<?=asset('js/jquery.popup.min.js')?>"></script>

<link rel="stylesheet" href="<?=asset('css/bootstrap.min.css')?>">
</body>