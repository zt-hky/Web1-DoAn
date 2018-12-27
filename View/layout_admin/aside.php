<aside class="aside">
     <header class="aside_header">
         <img src="<?php asset('images/logo.png') ?>" alt="">
            <h1>Admin</h1> 
     </header>
   
        <hr >
        <ul class="aside_list">
            <li class="aside_list_items">
                <a href="">Quản lý Sản phẩm</a>
                <ul>
                    <li><a href="<?= asset('admin/themsanpham')?>">Thêm Sản phẩm</a> </li>
                    <li> <a href="<?= asset('admin/listsanpham')?>">Danh sách Sản phẩm</a> </li>

                </ul>
            </li>
            <li class="aside_list_items">
                <a href="" class="test">Quản lý Loại sản phẩm</a>
                <ul>

                    <li><a href="<?= asset('admin/themdanhmuc')?>" >Thêm Loại sản phẩm</a>
                     
                    </li>
                    <li> <a href="<?= asset('admin/listdanhmuc')?>">Danh sách Loại sản phẩm</a></li>

                </ul>
            </li>
            <li class="aside_list_items">
                <a href="">Quản Lý đơn hàng</a>
                <ul>

                    <li><a href="">Đơn hàng đã giao hàng</a> </li>
                    <li><a href="">Danh sách chưa gửi</a> </li>

                </ul>
            </li>
            <li class="aside_list_items">
                <a href="">Quản Lý tài khoản</a>
                <ul>

                    <li><a href="">Thêm Thành viên </a> </li>
                    <li> <a href="">Danh sách thành viên</a> </li>

                </ul>
            </li>

        </ul>
    </aside>