<?php
$id = $_REQUEST['iddetail'];

$obj_pelanggan = new Pelanggan();
$obj_produk = new Produk();

$data_pelanggan = $obj_pelanggan->ambildata($id);
$data_produk = $obj_produk->tampil();
?>

<div class="container" style="min-height:50vh;">
    <h3 style="text-align:center;margin: 3vh 0;">Detail Pelanggan</h3>

    <ul>
        <li>Nama            : <?=$data_pelanggan['nama'] ?></li>
        <li>Jenis Kelamin   : <?=$data_pelanggan['jenis_kelamin'] ?></li>
        <li>Alamat          : <?=$data_pelanggan['alamat'] ?></li>
        <li>No Telepon      : <?=$data_pelanggan['no_telepon'] ?></li>
        <li>Jumlah Beli     : <?=$data_pelanggan['jumlah_beli'] ?></li>
        <li>Produk          : 
        <?php
        foreach ($data_produk as $jenis) {
        echo $jenis['id']==$data_pelanggan['produk_id']? $jenis['nama'] : '';
        }
        ?>
        </li> 
        
    </ul>
</div>