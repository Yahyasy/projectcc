<?php
$id = $_REQUEST['iddetail'];

$obj_produk = new Produk();
$obj_jenis_produk = new Jenis_produk();

$data_produk = $obj_produk->ambildata($id);
$data_jenis_produk = $obj_jenis_produk->tampil();

?>

<div class="container" style="min-height:50vh;">    
<h3 style="text-align:center;margin: 3vh 0;">Detail Produk</h3>

    <ul>
        <li>Nama            : <?=$data_produk['nama'] ?></li>
        <li>Harga Jual      : <?=$data_produk['harga_jual'] ?></li>
        <li>Stok            : <?=$data_produk['stok'] ?></li>
        <li>Jenis Produk    : 
        <?php
        foreach ($data_jenis_produk as $jenis) {
        echo $jenis['id']==$data_produk['jenis_produk_id']? $jenis['nama_jenis'] : '';
        }
        ?>
        </li>
        <li>Kode            : <?=$data_produk['kode'] ?></li>
    </ul>
</div>