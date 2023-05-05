<?php
// buat objek baru dari class jenis produk
$obj_jenis_produk = new Jenis_produk();

// panggil fungsi yang ada di dalam class jenis produk untuk menampilkan data jenis produk
$data_jenis_produk = $obj_jenis_produk->tampil();

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
                        <th>Detail</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- cetak data array produk -->
                    <?php
                    $no = 1;
                    foreach ($data_jenis_produk as $value) {
                    ?>
                    <tr>
                        <td><?= $no ?> </td>
                        <td><?= $value ['nama_jenis'] ?> </td>
                        <td>
                        <form action="jenis_controller.php" method="POST">
                            <a href="index.php?hal=jenis_detail&iddetail=<?=$value['id']?>">
                             <button type="button" class="btn btn-success btn-sm" title="Detail Jenis Produk">
                                <i class="fa-regular fa-eye"></i>
                             </button>
                            </a>
                            <a href="index.php?hal=jenis_edit&idedit=<?= $value ['id'] ?>">
                             <button type="button" class="btn btn-warning btn-sm" title="Edit Jenis Produk">
                                <i class="fa-solid fa-file-pen" style="color: #2f5598;"></i>
                             </button>
                            </a>
                            <button type="submit" value="hapus" class="btn btn-danger btn-sm" title="Hapus Jenis Produk" name="proses" onclick="return confirm('apakah anda ingin menghapus produk<?= $value['nama_jenis']?>?')">
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
        <a href="index.php?hal=jenis_form" style="text-align:center;" ><button class="btn btn-primary mb-4">Tambah Data</button></a>
    </div>
</div>
