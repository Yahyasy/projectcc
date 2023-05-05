<?php
$model =  new Produk();
$data_produk = $model->tampil();
?>

<!-- Section-->
<section class="py-5">
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    <?php 
                    foreach ($data_produk as $value) {
                    ?>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="assets/keranjang.png" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder"><?= $value ['nama'] ?></h5> 
                                    <!-- kode -->
                                    <p><?= $value ['kode'] ?></p>
                                    <!-- Product price-->
                                    Rp. <?= number_format ($value ['harga_jual']) ?>
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center">
                                    <form action="produk_controller.php" method="POST">
                                        <a href="index.php?hal=produk_detail&iddetail=<?=$value['id']?>">
                                         <button type="button" class="btn btn-success btn-sm" title="Detail Produk">
                                            <i class="fa-regular fa-eye"></i>
                                         </button>
                                        </a>
                                        <a href="index.php?hal=produk_edit&idedit=<?= $value ['id'] ?>">
                                         <button type="button" class="btn btn-warning btn-sm" title="Edit Produk">
                                            <i class="fa-solid fa-file-pen" style="color: #2f5598;"></i>
                                         </button>
                                        </a>
                                        <button type="submit" value="hapus" class="btn btn-danger btn-sm" title="Hapus Produk" name="proses" onclick="return confirm('apakah anda ingin menghapus produk<?= $value['nama']?>?')">
                                            <i class="fa-solid fa-trash-can" style="color: #ffffff;"></i>
                                        </button>
                                        <input type="hidden" name="idx" value="<?= $value['id'] ?>">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                    }
                    ?>
                </div>
                <center><a href="index.php?hal=produk_form"><button class="btn btn-primary">Tambah Data</button></a></center>
            </div>
        </section>