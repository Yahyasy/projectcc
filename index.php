<?php
include_once 'dbkoneksi.php';

include_once ('Models/Home.php');
include_once ('Models/Jenis_produk.php');
include_once ('Models/Pelanggan.php');
include_once ('navbar.php');

// request halaman
$hal = $_REQUEST['hal'];
// jika ada request dari url browser berupa HAL tampilkan halaman sesuai request
if(!empty($hal)){
    include_once $hal . '.php';
}
// jika tidak ada request hal dari url browser tampilkan halaman home
else{
    include_once('home.php');
}

include_once ('footer.php');

?>