<?php 
    $spBUS = new BUS\SanPhamBUS();
    $spBUS->readAll();
    $listSP = $spBUS->getData();

    #print_r($listSP);
?>
<section class="content_main">

    <h2>Danh sách sản phẩm</h2>
    <section class="content_main_search">
        <section class="content_main_search-1"><input type="text" placeholder="Nhập từ khóa tìm kiếm"> <button><img src="images/search.png" alt=""></button> </section>
        <select name="" id="">
            <option value="">Tất cả danh mục</option>
            <option value="">Áo</option>
            <option value="">Quần</option>
            <option value="">Mũ</option>
        </select>
        <button> <i class="fa fa-floppy-o"></i>Cập Nhật</button>
        <button> <i class="fa fa-plus"></i>Thêm mới</button>
    </section>
    <table class="content_main_items">
        <thead>
        <tr>
            <th class="content_main_items_xoa"> Xóa</th>
            <th class="content_main_items_stt">STT</th>
            <th class="content_main_items_tieude">Tiêu đề</th>
            <th class="content_main_items_img">Hình ảnh</th>
            <th class="content_main_items_price">Giá</th>
            <th class="content_main_items_hienthi">Hiển thị</th>
            <th class="content_main_items_tacvu">Tác vụ</th>
        </tr>

        </thead>
        <tbody>
            <?php 
                foreach($listSP as $SP)
                {
            ?>
        <tr>
            <td><input type="checkbox"></td>
            <td><?php echo $SP->idSanPham?></td>
            <td><?php echo $SP->TenSP?></td>
            <td><img src="<?php asset($SP->Img)?>" alt=""></td>
            <td><input type="number" value="<?php echo $SP->Gia?>"/></td>
            <td><input type="checkbox"></td>
            <td><i class="fa fa-pencil-square-o"></i>
                <i class="fa fa-trash"></i>
            </td>
        </tr>
                <?php } ?>

        </tbody>
        <tfoot></tfoot>
    </table>
</section>
