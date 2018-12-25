<section class="content">
        <aside class="content_aside">
            <h3>Bộ lọc Tìm kiếm</h3>
            <section class="content_aside_section">
                <section class="content_aside_section_checkbox">
                    <h3>Nhà sản xuất</h3>
                    <section class="content_aside_section_checkbox_item">
                        <article> <input type="checkbox">
                            <p>Convert</p>
                        </article>
                        <article> <input type="checkbox">
                            <p>Convert</p>
                        </article>
                        <article> <input type="checkbox">
                            <p>Convert</p>
                        </article>
                        <article> <input type="checkbox">
                            <p>Convert</p>
                        </article>
                    </section>
                </section>
                <section class="content_aside_section_price ">
                    <h3>Giá</h3>
                    <section>Từ <input type="text"> Đến <input type="text"> </section>
                </section>
            </section>
        </aside>
        <section class="content_item">
            <nav class="content_item_nav">
                <h3>Sắp xếp theo</h3>
                <section class="content_item_nav_sort">
                    <button class="content_item_nav_sort_item">Mới nhất</button>
                    <button class="content_item_nav_sort_item">Bán chạy</button>
                    <div class="dropdown ">
                        <button class="dropdown_btn content_item_nav_sort_item">Giá
                        </button>
                        <div class="dropdown_menu">
                            <a class="dropdown-item" href="#">Thấp đến cao</a>
                            <a class="dropdown-item" href="#">Cao đến thấp</a>

                        </div>
                    </div>
                </section>

            </nav>
            <section class="content_item_list">
                <?php
        
                foreach($lstSanPham as $SanPham) 
                {
                ?>
                <article class="content_item_list_item">
                    <img src="<?php #asset($SanPham->Img)?>" alt="">
                    <h4><?php# echo $SanPham->TenSP ?></h4>
                    <div><?php echo round($SanPham->Gia) ?>đ</div>
                    <button>Mua ngay</button>
                    <i>Lượt mua: <?php echo $SanPham->SLBan ?></i>
                </article>
                
                <?php  } ?>
            </section>
            <nav aria-label="Page navigation example paging">
                <ul class="pagination">
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                            <span class="sr-only">Previous</span>
                        </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                            <span class="sr-only">Next</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </section>
    </section>
