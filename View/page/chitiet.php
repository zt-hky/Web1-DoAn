<?=
view('layout/head');
?>

<body>

<?= view('layout/header');
    view('layout/navbar',array("lstLoaiSanPham"=>$lstLoaiSanPham));
view('layout/chitietsanpham',array( 'chitiet'=>$chitiet,'SPlquan'=>$SPlquan,'loaiSP'=>$loaiSP,'nsx'=>$nsx));
view('layout/footer');
?>



<script src="<?= asset('js/jquery-3.3.1.min.js')?>"></script>
<script src="<?=asset('js/bootstrap.min.js')?>"></script>
<script src="<?=asset('js/jquery.popup.min.js')?>"></script>


</body>