<?= view('layout/head'); ?>

<body>
    <?php view('layout/header') ?>
<h1>Đăng Nhập Tài Khoản</h1>
    <section class="form">
        
    <?php if($status  == 1)
    {
        ?>
    <div class="alert alert-danger" role="alert">
         Sai tên tài khoản hoặc mật khẩu!
        </div>
    <?php } ?>
            <form action="<?php asset('login')?>" method="post">
            <input class="form-usename" type="text" name="username"placeholder="Tên Đăng Nhập">
            <input class="form-password" type="password" name="password" placeholder="Mật khẩu">
           
            <button type="submit" name="btn_submit" value="login">Đăng nhập</button>
            </form>
            <a href="<?php asset('singup')?>"> Chưa có tài khoản? Đăng ký ngay!</a>
    </section>
    <script src="<?= asset('js/jquery-3.3.1.min.js')?>"></script>
<script src="<?=asset('js/bootstrap.min.js')?>"></script>
<script src="<?=asset('js/jquery.popup.min.js')?>"></script>
<link rel="stylesheet" href="<?= asset('css/login.css') ?>">
</body>
