<aside class="content_aside">
            <h3>Nhà sản xuất</h3>
            <ul class="list-group">
<?php  foreach ($lstNSX as $NSX) {?>
                <li class="list-group-item">
                    <a href="<?= asset('nsx/'.$NSX->Url) ?>"><?php echo $NSX->TenNSX ?></a>
                </li>
<?php }?>
            </ul>
        </aside>
       