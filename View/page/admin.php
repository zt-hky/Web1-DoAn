<?= view('layout_admin/head')?>
<body>
    <?=view('layout_admin/aside');
    view('layout_admin/'.$action);

    ?>
<script src="js/bootstrap.min.js"></script>

<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/admin.js"></script>

<link rel="stylesheet" href="<?=asset('css/admin.css')?>">

</body>