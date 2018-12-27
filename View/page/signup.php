<?= view('layout/head'); ?>

<body>
    <?php view('layout/header') ?>
    <h1>Đăng kí tài khoản</h1>
    <section class="form" >
    <div id="alert-thongbao" class="alert alert-warning" role="alert" style="display: none;">
     
    </div>
    <form id="regFrom" action="<?= asset('signup')?>" method="post">

    <div class="form-group">
      <label for="inputFullName">Họ và tên của bạn</label>
      <input type="text" class="form-control" name="FullName" id="inputFullName" placeholder="Họ và tên">
    </div>
    <div class="form-row">
        <div class="form-group col-4">
            <label for="">Ngày</label>
            <select class="form-control custom-select custom-select-sm mb-3" name="day">
            <option value="1">1</option>
            <option value="2">2</option>
             <option value="3">3</option>
            </select>
        </div>
        <div class="form-group col-4">
            <label for="">Tháng</label>
            <select class="form-control custom-select custom-select-sm mb-3" name="month">
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
        <div class="form-group col-4" name="year">
            <label for="">Năm</label>
            <select name = "year" class="form-control custom-select custom-select-sm mb-3">
            <option value="2005">2005</option>
            <option value="2004">2004</option>
             <option value="2003">2003</option>
            </select>
        </div>
    </div>

    <div class="form-group">
            <label for="">City</label>
            <select class="form-control custom-select custom-select-sm mb-3 " name="idCity">
            
            <?php
            foreach($listCity as $City) {
            ?>
            <option value="<?php echo $City->idCITY?>"><?php echo $City->NameCity ?></option>
            
<?php } ?>
         
            </select>
        </div>

    <div class="form-group">
      <label for="inputUserName">Tên đăng nhập</label>
      <input type="text" class="form-control" name="UserName" id="inputUserName" placeholder="Username">
  </div>

  <div class="form-group">
      <label for="inputPassword1">Mật khẩu</label>
      <input type="password" name="Password" class="form-control" id="inputPassword1" placeholder="Password">
  </div>
  <div class="form-group">
      <label for="inputPassword2">Nhập lại mật khẩu</label>
      <input type="password" name="Password2" class="form-control" id="inputPassword2" placeholder="Password">
  </div>
  <div class="form-group col-12">
        <button type="submit col-12" name="btn_submit" value="submit">Đăng kí</button>
  </div>
    
</form>
    </section>
    <script src="<?= asset('js/jquery-3.3.1.min.js')?>"></script>
<script src="<?=asset('js/bootstrap.min.js')?>"></script>
<script src="<?=asset('js/jquery.popup.min.js')?>"></script>
<link rel="stylesheet" href="<?= asset('css/login.css') ?>">
<script>
$('#regFrom').submit(function(){ 
    var FullName = $("#inputFullName").val().toString();
    var UserName = $("#inputUserName").val();
    var Password = $("#inputPassword1").val();
    var Password2 = $("#inputPassword2").val();
    
    var $noti = $('#alert-thongbao');

    var check = true;

    if(/^.{8,}$/.test(FullName) == false)
    {
        $noti.html('Vui lòng nhập tên đầy đủ');
        check = false;
    }
    else if(/^[A-z|-|_|0-9]{6,24}$/.test(UserName)== false)
    {
        $noti.html('UserName phải từ 6 đến 24 kí tự, cho phép - và _');
        check = false;
    }
    else if(/^.{8,}$/.test(Password) == false)
    {
        $noti.html('Password chưa đủ an toàn');
        check = false;
    }
    else if(Password != Password2)
    {
        $noti.html('Password không khớp');
        check = false;
    }
    

    if(check == false)
    {
        $noti.show();
    }
    return check;
});

</script>

</body>
