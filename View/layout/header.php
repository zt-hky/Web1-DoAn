<header class="header">
            <nav class="navbar navbar-expand-lg navbar-light ">
                    <a class="navbar-brand" href="#"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarText">
                      <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                          <a class="nav-link" href="<?= asset('') ?>">Trang chủ<span class="sr-only">(current)</span></a>
                        </li>
                      <?php  if(isset($_SESSION['user']))
                      { ?>


                        <li class="nav-item">
                          <a class="nav-link" href="#">Thông tin đơn hàng</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="<?= asset('logout')?>">Đăng xuất</a>
                        </li>
                      <? } else {
                        ?>
                        <li class="nav-item">
                          <a class="nav-link" href="<?php asset('login') ?>">Đăng nhập</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="<?= asset('singup')?>">Đăng kí</a>
                        </li>
                        <?php
                      }
                      ?>


                      </ul>
                    </div>
                  </nav>
        <section class="header_intro">
            <section class="header_intro_1">
              
                <img src="<?= asset('images/logo.png') ?>" alt="">
            </section>
            <section class="header_intro_2">
                <section>
                    <input type="text" placeholder="Tìm kiếm sản phẩm">
                 <button> <img src="<?= asset('images/search.png')?>" alt=""></button>   
                </section>
                <button class="header_intro_2_img">  <img  src="<?= asset('images/icon-shop.png') ?>" alt=""></button> 
              

            </section>
            <section class="header_intro_3"> 
                <img src="<?= asset('images/avatar.png') ?>" alt="">
                <h5>Nguyễn Hữu Khánh</h5>
            </section>

        </section>


    </header>