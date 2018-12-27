<section class="content">
    <div class="container">
        <div class="row container-1">
            <div class="col-5">
                <img src="<?= asset($chitiet->Img)?>" alt="">
            </div>
            <div class="col-7">
                <h3><?=$chitiet->TenSP ?></h3>
                <h5>Nhà sản xuất:</h5>

                <div class="price"> <?=$chitiet->Gia?>đ</div>
                <div class="input">
                    <input type="number" placeholder="Số Lượng">
                    <button><i class="fa fa-shopping-cart"></i> THÊM VÀO GIỎ</button>
                </div>
                <div class="info">
                    <?=$chitiet->MoTa?>
                </div>
            </div>

        </div>
        <hr>
        <div class=" container-2">
        <h3>Những Sản Phẩm Liên quan</h3>
         
    
            <div class="row container-2-lists">
            <?php  
       
            foreach($SPlquan as $sp)
            {
            ?>
                <div class="coll">
                    <div class='coll-1'> <img src="<?=asset($sp->Img)?>" alt="s"></div>

                    <h4><?=$sp->TenSP?></h4>
                    <div class='coll-3'><?= $sp->Gia?> đ</div>
                </div>
            <?php }?>

            </div>
        </div>
    </div>
</section>