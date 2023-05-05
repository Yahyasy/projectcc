<?php
class Produk{
    private $koneksi;
    // akses properti yang bersifat private menggunakan $this
    public function __construct(){
        // function construck adalah function yang pertama kali dijalankan
        global $conn;
        $this->koneksi = $conn;
    }
    public function tampil(){
    // cetak seluruh data tabel produk menggunakan query select
        $sql = "SELECT * FROM produk";
        
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
        $sql = "SELECT * FROM produk WHERE id=?";

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
        $sql = "INSERT INTO produk (nama,harga_jual,stok,jenis_produk_id,kode) VALUES (?,?,?,?,?)";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }

    public function ubah($data){
        $sql = "UPDATE produk SET nama=?, harga_jual=?, stok=?, jenis_produk_id=?, kode=? WHERE id=? ";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }

    public function hapus($id){
        $sql = "DELETE FROM produk WHERE id=?";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute([$id]);
    }
}
?>