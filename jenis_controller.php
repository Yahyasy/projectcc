<?php
include_once 'dbkoneksi.php';
include_once 'Models/Jenis_produk.php';

// step 1 tangkap request form bedasarkan uniq id dan name
$nama = $_POST['nama_jenis'];

// step 2 simpan data ke dalam array
$data = [
    $nama,
];

// step 3 eksekusi ketika tombol di klik kirim data kedalam model produk/function simpan
$model = new Jenis_produk();
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
        header('Location:index.php?hal=jenis');
        break;
}
header('Location:index.php?hal=jenis');
?>