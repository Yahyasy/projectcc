<?php
class Jenis_produk{
    public $koneksi;
    public function __construct(){
        global $conn;
        $this->koneksi = $conn;
    }
    public function tampil(){
        // cetak seluruh data tabel produk menggunakan query select
            $sql = "SELECT * FROM jenis_produk";
            
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
        $sql = "SELECT * FROM jenis_produk WHERE id=?";

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
        $sql = "INSERT INTO jenis_produk (nama_jenis) VALUES (?)";
        $ps = $this->koneksi->prepare($sql);
        $ps-> execute($data);
    }

    public function ubah($data){
        $sql = "UPDATE jenis_produk SET nama_jenis=? WHERE id=? ";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);

    }

    public function hapus($id){
        $sql = "DELETE FROM jenis_produk WHERE id=?";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute([$id]);
    }
}

?>