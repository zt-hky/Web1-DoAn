
        
        <section id="idContentSP" class="content_item">
            <section class="content_item_list">
                <?php
        
                foreach($lstSanPham as $SanPham) 
                {
                ?>
                <article class="content_item_list_item">
                    <img src="<?php asset($SanPham->Img)?>" alt="">
                    <h4><?php echo substr($SanPham->TenSP,0,50) ?></h4>
                    <div><?php echo round($SanPham->Gia) ?>đ</div>
                    <button>Mua ngay</button>
                    <i>Lượt mua: <?php echo $SanPham->SLBan ?></i>
                </article>
             
                <?php  } ?>
            </section>
            <nav aria-label="Page navigation example paging">
                <ul class="pagination">
                    <li class="page-item <?php if($page['pageNow'] == 1) echo 'disabled' ?>">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                            <span class="sr-only">Previous</span>
                            Trước
                        </a>
                    </li>
                    
                    <?php 
                        for ($i = 1; $i<= $page['amountPage'] ; $i++ )
                        {
                            ?>
                            <li class="page-item <?php if($page['pageNow'] == $i) echo 'active' ?>
                            "><a class="page-link" href="#"><?php echo $i ?></a></li>
                            <?php
                        }
                    ?>

                    <li class="page-item <?php if($page['pageNow'] == $page['amountPage']) echo 'disabled' ?>">
                        <a class="page-link" href="#" aria-label="Next">
                            Sau
                            <span aria-hidden="true">&raquo;</span>
                            <span class="sr-only">Next</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </section>
 
