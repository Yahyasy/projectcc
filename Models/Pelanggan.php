<?php
class Pelanggan{
    public $koneksi;
    public function __construct(){
        global $conn;
        $this->koneksi = $conn;
    }
    public function tampil(){
        // cetak seluruh data tabel produk menggunakan query select
        $sql = "SELECT pel.*, p.nama AS namaproduk
        FROM produk p INNER JOIN pelanggan pel ON p.id= pel.produk_id
        ORDER BY pel.id";
            
        // gunakan method prepare untuk mengirim data $sql
            $ps = $this->koneksi->prepare($sql);
        // eksekusi data yang sudah disiapkan menggunakan method prepare
            $ps->execute();
        // siapkan data sql yang sudah di eksekusi menggunakan method fetchALL
            $data = $ps->fetchALL();
        // kembalikan data produk yang dalam bentuk array 
            return $data;
    }
    
    public function ambildata($id){
        $sql = "SELECT * FROM pelanggan WHERE id=?";

    // gunakan method prepare untuk mengirim data $sql
        $ps = $this->koneksi->prepare($sql);
    // eksekusi data yang sudah disiapkan menggunakan method prepare
        $ps->execute([$id]);
    // siapkan data sql yang sudah di eksekusi menggunakan method fetchALL
        $data = $ps->fetch();
    // kembalikan data produk yang dalam bentuk array 
        return $data;
    }

    public function simpan($data){
        $sql = "INSERT INTO pelanggan (nama,jenis_kelamin,alamat,no_telepon,jumlah_beli,produk_id) VALUES (?,?,?,?,?,?)";
        $ps = $this->koneksi->prepare($sql);
        $ps-> execute($data);
    }

    public function ubah($data){
        $sql = "UPDATE pelanggan SET nama=?, jenis_kelamin=?, alamat=?, no_telepon=?, jumlah_beli=?, produk_id=? WHERE id=? ";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);

    }
    public function hapus($id){
        $sql = "DELETE FROM pelanggan WHERE id=?";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute([$id]);
    }
}

?>