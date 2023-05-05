<?php
include_once 'dbkoneksi.php';
include_once 'Models/Home.php';

// step 1 tangkap request form bedasarkan uniq id dan name
$nama = $_POST['nama'];
$hargajual = $_POST['harga_jual'];
$stok = $_POST['stok'];
$jenis = $_POST['jenis_produk_id'];
$kode = $_POST['kode'];

// step 2 simpan data ke dalam array
$data = [
    $nama,
    $hargajual,
    $stok,
    $jenis,
    $kode,
];

// step 3 eksekusi ketika tombol di klik kirim data kedalam model produk/function simpan
$model = new Produk();
$tombol = $_REQUEST['proses'];
switch ($tombol) {
    case 'simpan':
        $model->simpan($data);
        break;

    case 'ubah':
        // tangkap hidden field
        $data[] = $_POST['idx'];
        $model->ubah($data);
        break;

    case 'hapus':
        unset($data);
        $model->hapus($_POST['idx']);
        break;
    
    default:
        header('Location:index.php?hal=home');
        break;
}
header('Location:index.php?hal=home');
?>