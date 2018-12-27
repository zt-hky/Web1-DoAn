<nav class="nav">
    <?php 
    foreach($lstLoaiSanPham as $loaiSanPham) {
    ?>
 
        <a href="<?= asset('kind/'.$loaiSanPham->Url)?>" class="nav_menu"><img src="<?= asset($loaiSanPham->Img) ?>" alt="<?php echo $loaiSanPham->TenLoai ?>">
            <p><?php echo $loaiSanPham->TenLoai ?></p>
        </a>
<?php } ?>

</nav>