<?php
include_once 'dbkoneksi.php';
include_once 'Models/Pelanggan.php';

// step 1 tangkap request form bedasarkan uniq id dan name
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];
$telepon = $_POST['no_telepon'];
$jumlah_beli = $_POST['jumlah_beli'];
$produk = $_POST['produk_id'];

// step 2 simpan data ke dalam array
$data = [
    $nama,
    $jenis_kelamin,
    $alamat,
    $telepon,
    $jumlah_beli,
    $produk,
];

// step 3 eksekusi ketika tombol di klik kirim data kedalam model produk/function simpan
$model = new Pelanggan();
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
        header('Location:index.php?hal=pelanggan');
        break;
}
header('Location:index.php?hal=pelanggan');
?>