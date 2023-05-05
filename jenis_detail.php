<?php
$id = $_REQUEST['iddetail'];

$obj_jenis = new Jenis_produk();
$data_jenis = $obj_jenis->ambildata($id);
?>

<div class="container" style="min-height:50vh;">
    <h3 style="text-align:center;margin: 3vh 0;">Detail Jenis Produk</h3>

    <ul>
        <li>Nama            : <?=$data_jenis['nama_jenis'] ?></li>
    </ul>
</div>