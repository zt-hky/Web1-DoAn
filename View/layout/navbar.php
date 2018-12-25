<nav class="nav">
    <?php 
    foreach($lstLoaiSanPham as $loaiSanPham) {
    ?>
        <article class="nav_menu"><img src="<?= asset($loaiSanPham->Img) ?>" alt="<?php echo $loaiSanPham->TenLoai ?>">
            <p><?php echo $loaiSanPham->TenLoai ?></p>
        </article>
<?php } ?>

</nav>