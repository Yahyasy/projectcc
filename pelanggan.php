<?php
$obj_Pelanggan = new Pelanggan();
$obj_Produk = new Produk();

$data_Pelanggan = $obj_Pelanggan->tampil();
$data_Produk = $obj_Produk->tampil();
?>

<div class="container" style="min-height:50vh;">
    <h3 style="text-align:center;margin: 3vh 0;">Data Jenis Produk</h3>
    <div class="row justify-content-center" >
        <div class="col-12">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Jumlah Beli</th>
                        <th>Produk</th>
                        <th>Detail</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- cetak data array produk -->
                    <?php
                    $no = 1;
                    foreach ($data_Pelanggan as $value) {
                    ?>
                    <tr>
                        <td><?= $no ?> </td>
                        <td><?= $value ['nama'] ?> </td>
                        <td><?= $value ['jumlah_beli'] ?> </td>                       
                        <td><?= $value ['namaproduk'] ?> </td>
                        <td>
                        <form action="pelanggan_controller.php" method="POST">
                            <a href="index.php?hal=pelanggan_detail&iddetail=<?=$value['id']?>">
                             <button type="button" class="btn btn-success btn-sm" title="Detail Pelanggan">
                                <i class="fa-regular fa-eye"></i>
                             </button>
                            </a>
                            <a href="index.php?hal=pelanggan_edit&idedit=<?= $value ['id'] ?>">
                             <button type="button" class="btn btn-warning btn-sm" title="Edit Pelanggan">
                                <i class="fa-solid fa-file-pen" style="color: #2f5598;"></i>
                             </button>
                            </a>
                            <button type="submit" value="hapus" class="btn btn-danger btn-sm" title="Hapus Pelanggan" name="proses" onclick="return confirm('apakah anda ingin menghapus pelanggan<?= $value['nama']?>?')">
                                <i class="fa-solid fa-trash-can" style="color: #ffffff;"></i>
                            </button>
                            <input type="hidden" name="idx" value="<?= $value['id'] ?>">
                        </form>
                        </td>                       
                    </tr>
                    <?php
                    $no++;
                    }
                    ?>
                    
                    
                </tbody>
            </table>
        </div>
        <a href="index.php?hal=pelanggan_form" style="text-align:center;" ><button class="btn btn-primary mb-4">Tambah Data</button></a>
    </div>
</div>