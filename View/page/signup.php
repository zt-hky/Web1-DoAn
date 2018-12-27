<?= view('layout/head'); ?>

<body>
    <?php view('layout/header') ?>
    <h1>Đăng kí tài khoản</h1>
    <section class="form">
    <form action="<?= asset('signup')?>" method="post">

    <div class="form-group">
      <label for="inputFullName">Họ và tên của bạn</label>
      <input type="text" class="form-control" id="inputFullName" placeholder="Họ và tên">
    </div>
    <div class="form-row">
        <div class="form-group col-4">
            <label for="">Ngày</label>
            <select class="form-control custom-select custom-select-sm mb-3">
            <option value="1">1</option>
            <option value="2">2</option>
             <option value="3">3</option>
            </select>
        </div>
        <div class="form-group col-4">
            <label for="">Tháng</label>
            <select class="form-control custom-select custom-select-sm mb-3">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="3">4</option>
            <option value="3">5</option>
            <option value="3">6</option>
            <option value="3">7</option>
            <option value="3">8</option>
            <option value="3">9</option>

            </select>
        </div>
        <div class="form-group col-4">
            <label for="">Năm</label>
            <select class="form-control custom-select custom-select-sm mb-3">
            <option value="2005">2005</option>
            <option value="2004">2004</option>
             <option value="2003">2003</option>
            </select>
        </div>
    </div>

    <div class="form-group">
            <label for="">City</label>
            <select class="form-control custom-select custom-select-sm mb-3 " name="city">
            
            <?php
            foreach($listCity as $City) {
            ?>
            <option value="<?php echo $City->idCITY?>"><?php echo $City->NameCity ?></option>
            
<?php } ?>
         
            </select>
        </div>

    <div class="form-group">
      <label for="inputUserName">Tên đăng nhập</label>
      <input type="text" class="form-control" id="inputUserName" placeholder="Username">
  </div>

  <div class="form-group">
      <label for="inputPassword1">Mật khẩu</label>
      <input type="password" class="form-control" id="inputPassword1" placeholder="Password">
  </div>
  <div class="form-group">
      <label for="inputPassword2">Nhập lại mật khẩu</label>
      <input type="password" class="form-control" id="inputPassword2" placeholder="Password">
  </div>
  <div class="form-group col-12">
        <button type="submit col-12">Đăng kí</button>
  </div>
    
</form>
    </section>
    <script src="<?= asset('js/jquery-3.3.1.min.js')?>"></script>
<script src="<?=asset('js/bootstrap.min.js')?>"></script>
<script src="<?=asset('js/jquery.popup.min.js')?>"></script>
<link rel="stylesheet" href="<?= asset('css/login.css') ?>">
</body>
